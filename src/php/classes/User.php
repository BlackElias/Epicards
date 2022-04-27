<?php
include_once(__DIR__ . "/Db.php");

class User
{
    private $userId;
    private $username;
    private $firstname;
    private $lastname;
    private $password;
    private $email;
    private $picture;
    private $description;
    private $location;


    /**
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
    /**
     * Get the value of picture
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        //CHECK IF EMPTY
        if (empty($username)) {
            throw new Exception("Username may not be empty!");
        }
        $this->username = $username;
        return $this;
    }

    public function checkUsername()
    {
        $username = $this->getUsername();
        $conn = Db::getConnection();
        $statement = $conn->prepare("select * from users where username = :username");
        $statement->bindValue(":username", $username);
        $statement->execute();
        $result = $statement->fetch();
        if ($result != false) {
            throw new Exception("Username is already being used, please try a different one");
        }

        $this->username = $username;
        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        if (empty($firstname)) {
            throw new Exception("First name may not be empty!");
        }
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        if (empty($lastname)) {
            throw new Exception("Last name may not be empty!");
        }
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        if (empty($password)) {
            throw new Exception("Password may not be empty!");
        }
        $this->password = $password;
        return $this;
    }

    public function hashPassword()
    {
        $password = $this->getPassword();
        $options = [
            'cost' => 14,
        ];
        $this->password = password_hash($password, PASSWORD_DEFAULT, $options);
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        if (empty($email)) {
            throw new Exception("Email may not be empty!");
        }
        $this->email = $email;

        return $this;
    }

    public function checkEmail()
    {
        $email = $this->getEmail();
        $conn = Db::getConnection();
        $statement = $conn->prepare("select * from users where email = :email");
        $statement->bindValue(":email", $email);
        $statement->execute();
        $result = $statement->fetch();
        if ($result != false) {
            throw new Exception("Email is already being used, please try a different one");
        }
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function save()
    {
        $conn = Db::getConnection();

        $sql = "INSERT INTO users (email, firstname, lastname, username, password, picture) VALUES (:email, :firstname, :lastname, :username, :password, 'uploads/profilePictures/default.png')";
        $statement = $conn->prepare($sql);
        $email = $this->getEmail();
        $firstname = $this->getFirstname();
        $lastname = $this->getLastname();
        $username = $this->getUsername();
        $password = $this->getPassword();

        $statement->bindValue(":email", $email);
        $statement->bindValue(":firstname", $firstname);
        $statement->bindValue(":lastname", $lastname);
        $statement->bindValue(":username", $username);
        $statement->bindValue(":password", $password);
        $statement->execute();
    }

    public function canLogin()
    {
        $conn = Db::getConnection();

        $sql = "SELECT username, password FROM users WHERE username = :username";
        $statement = $conn->prepare($sql);

        $username = $this->getUsername();
        $password = $this->getPassword();

        $statement->bindValue(":username", $username);
        $statement->execute();
        $result = $statement->fetchAll();
        $hash = $result[0]['password'];

        if (!password_verify($password, $hash)) {
            throw new Exception("Username or password is incorrect!");
        }
    }



    //Get current active user
    public function getLoggedUser($username)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $statement->bindValue(":username", $username);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if (empty($user)) {
            throw new Exception(" No user is logged in.");
        }
        return $user;
    }

    public function getUserInfo($userId)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM users WHERE id = :userId");
        $statement->bindValue(":userId", $userId);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if (empty($user)) {
            throw new Exception(" No user is logged in.");
        }
        return $user;
    }

    public function updateInfo($currentUserId)
    {

        $conn = Db::getConnection();
        $statement = $conn->prepare("UPDATE users SET username = :username, firstname = :firstname, lastname = :lastname , bio = :description, email = :email, picture = :picture WHERE id = :currentUserId");
        $statement->bindValue(":currentUserId", $currentUserId);

        $username = $this->getUsername();
        $firstname = $this->getFirstname();
        $lastname = $this->getLastname();
        $description = $this->getDescription();
        $email = $this->getEmail();
        $picture = $this->getPicture();

        $statement->bindValue(":username", $username);
        $statement->bindValue(":firstname", $firstname);
        $statement->bindValue(":lastname", $lastname);
        $statement->bindValue(":description", $description);
        $statement->bindValue(":email", $email);
        $statement->bindValue(":picture", $picture);

        $user = $statement->execute();

        return $user;
    }

    public function verifyPassword($currentUserId)
    {

        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT password FROM users WHERE id = :currentUserId");

        $password = $this->getPassword();

        $statement->bindValue(":currentUserId", $currentUserId);
        $statement->execute();

        $result = $statement->fetchAll();
        $hash = $result[0]['password'];

        if (!password_verify($password, $hash)) {
            throw new Exception("Current password is incorrect!");
        }
    }

    public function updatePassword($currentUserId)
    {
        $conn = Db::getConnection();

        $statement = $conn->prepare("UPDATE users SET password = :password WHERE id = :currentUserId");
        $statement->bindValue(":currentUserId", $currentUserId);

        $password = $this->getPassword();
        $statement->bindValue(":password", $password);

        $user = $statement->execute();

        return $user;
    }

    public static function searchUsers($query)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM users WHERE INSTR(username, :query) OR INSTR(firstname, :query) OR INSTR(lastname, :query)");
        $statement->bindValue(":query", $query);

        $user = $statement->execute();
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }



    public function uploadProfilePicture($profilepicture)
    {
        if (!empty($_FILES["profilePicture"]["name"])) {
            $target_dir = "uploads/profilePictures/";
            $file = $profilepicture;
            $path = pathinfo($file);
            $username = $this->getUsername();
            $ext = $path["extension"];
            $temp_name = $_FILES["profilePicture"]["tmp_name"];
            $filename = $username . "_" . "profilepicture" . "_" . mt_rand(100000, 999999);
            $path_filename_ext = $target_dir . $filename . "." . $ext;

            while (file_exists($path_filename_ext)) {
                $filename = $username . "_" . "profilepicture" . "_" . mt_rand(100000, 999999);
                $path_filename_ext = $target_dir . $filename . "." . $ext;
            }
            move_uploaded_file($temp_name, $path_filename_ext);
            if (!$path_filename_ext) {
                throw new Exception("Something went wrong when uploading the picture, please try again later");
            }
        }
        return $path_filename_ext;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
}
