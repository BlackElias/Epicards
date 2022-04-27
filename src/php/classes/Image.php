<?php
include_once(__DIR__ . "/Db.php");
class Image
{
    private $userId;
    private $image;
    private $type;


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
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function saveImage()
    {
        //CHECK IF EMPTY
        if (empty($_FILES["image"]["name"])) {
            throw new Exception("An image upload is required!");
        }
        $image = $this->getImage();
        $type = $this->getType();
        $target_dir = "uploads/posts/";
        $file = $image;
        $path = pathinfo($file);
        $id = $this->getUserId();
        $ext = $path['extension'];
        $temp_name = $_FILES['image']['tmp_name'];
        if ($_FILES["image"]["error"] === 1) {
            throw new Exception("The image file size is too big, please try a smaller one");
        } else if ($_FILES["image"]["error"] !== 0) {
            throw new Exception("Something went wrong when uploading the image, please try again later");
        }
        //APPLY FILTER
        if ($ext === "png" || $ext === "PNG") {
            $img = imagecreatefrompng($temp_name);
            switch ($type) {
                case 'IMG_FILTER_NEGATE':
                    imagefilter($img, IMG_FILTER_NEGATE);
                    break;
                case 'IMG_FILTER_GRAYSCALE':
                    imagefilter($img, IMG_FILTER_GRAYSCALE);
                    break;
                case 'IMG_FILTER_COLORIZE':
                    imagefilter($img, IMG_FILTER_COLORIZE, 50, 0, 0);
                    break;
                case 'IMG_FILTER_MEAN_REMOVAL':
                    imagefilter($img, IMG_FILTER_MEAN_REMOVAL);
                    break;
                case 'IMG_FILTER_EMBOSS':
                    imagefilter($img, IMG_FILTER_EMBOSS);
                    break;
                default:
                    break;
            }
            imagepng($img, $temp_name);
        }

        //SET FILENAME
        $filename = "post_" . $id . "_" . mt_rand(100000, 999999);
        $path_filename_ext = $target_dir . $filename . "." . $ext;
        //CHECK IF FILENAME EXCISTS
        while (file_exists($path_filename_ext)) {
            $filename = "post_" . $id . "_" . mt_rand(100000, 999999);
            $path_filename_ext = $target_dir . $filename . "." . $ext;
        }
        //MOVE TO FOLDER
        move_uploaded_file($temp_name, $path_filename_ext);
        if (!$path_filename_ext) {
            throw new Exception("Something went wrong when uploading the image, please try again later");
        }
        return $path_filename_ext;
    }
}
