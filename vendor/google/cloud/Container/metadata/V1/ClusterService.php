<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace GPBMetadata\Google\Container\V1;

class ClusterService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Code::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
)google/container/v1/cluster_service.protogoogle.container.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/rpc/code.protogoogle/rpc/status.proto"�
LinuxNodeConfigB
sysctls (21.google.container.v1.LinuxNodeConfig.SysctlsEntry.
SysctlsEntry
key (	
value (	:8"�
NodeKubeletConfig
cpu_manager_policy (	1
cpu_cfs_quota (2.google.protobuf.BoolValue
cpu_cfs_quota_period (	"�	

NodeConfig
machine_type (	
disk_size_gb (
oauth_scopes (	
service_account	 (	?
metadata (2-.google.container.v1.NodeConfig.MetadataEntry

image_type (	;
labels (2+.google.container.v1.NodeConfig.LabelsEntry
local_ssd_count (
tags (	
preemptible
 (<
accelerators (2&.google.container.v1.AcceleratorConfig
	disk_type (	
min_cpu_platform (	M
workload_metadata_config (2+.google.container.v1.WorkloadMetadataConfig.
taints (2.google.container.v1.NodeTaint:
sandbox_config (2".google.container.v1.SandboxConfig

node_group (	F
reservation_affinity (2(.google.container.v1.ReservationAffinityM
shielded_instance_config (2+.google.container.v1.ShieldedInstanceConfig?
linux_node_config (2$.google.container.v1.LinuxNodeConfig>
kubelet_config (2&.google.container.v1.NodeKubeletConfig
boot_disk_kms_key (	4
gcfs_config (2.google.container.v1.GcfsConfigO
advanced_machine_features (2,.google.container.v1.AdvancedMachineFeatures.
gvnic (2.google.container.v1.VirtualNIC/
MetadataEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8"M
AdvancedMachineFeatures
threads_per_core (H �B
_threads_per_core"b
NodeNetworkConfig
create_pod_range (B�A
	pod_range (	
pod_ipv4_cidr_block (	"Y
ShieldedInstanceConfig
enable_secure_boot (#
enable_integrity_monitoring ("k
SandboxConfig5
type (2\'.google.container.v1.SandboxConfig.Type"#
Type
UNSPECIFIED 

GVISOR"

GcfsConfig
enabled ("�
ReservationAffinityO
consume_reservation_type (2-.google.container.v1.ReservationAffinity.Type
key (	
values (	"Z
Type
UNSPECIFIED 
NO_RESERVATION
ANY_RESERVATION
SPECIFIC_RESERVATION"�
	NodeTaint
key (	
value (	5
effect (2%.google.container.v1.NodeTaint.Effect"Y
Effect
EFFECT_UNSPECIFIED 
NO_SCHEDULE
PREFER_NO_SCHEDULE

NO_EXECUTE"�

MasterAuth
username (	B
password (	BO
client_certificate_config (2,.google.container.v1.ClientCertificateConfig
cluster_ca_certificated (	
client_certificatee (	

client_keyf (	";
ClientCertificateConfig 
issue_client_certificate ("�
AddonsConfigC
http_load_balancing (2&.google.container.v1.HttpLoadBalancingQ
horizontal_pod_autoscaling (2-.google.container.v1.HorizontalPodAutoscalingJ
kubernetes_dashboard (2(.google.container.v1.KubernetesDashboardBG
network_policy_config (2(.google.container.v1.NetworkPolicyConfig=
cloud_run_config (2#.google.container.v1.CloudRunConfig=
dns_cache_config (2#.google.container.v1.DnsCacheConfigK
config_connector_config
 (2*.google.container.v1.ConfigConnectorConfigd
%gce_persistent_disk_csi_driver_config (25.google.container.v1.GcePersistentDiskCsiDriverConfigY
gcp_filestore_csi_driver_config (20.google.container.v1.GcpFilestoreCsiDriverConfig"%
HttpLoadBalancing
disabled (",
HorizontalPodAutoscaling
disabled ("\'
KubernetesDashboard
disabled ("\'
NetworkPolicyConfig
disabled ("!
DnsCacheConfig
enabled ("9
&PrivateClusterMasterGlobalAccessConfig
enabled ("�
PrivateClusterConfig
enable_private_nodes (
enable_private_endpoint (
master_ipv4_cidr_block (	
private_endpoint (	
public_endpoint (	
peering_name (	`
master_global_access_config (2;.google.container.v1.PrivateClusterMasterGlobalAccessConfig"D
AuthenticatorGroupsConfig
enabled (
security_group (	"�
CloudRunConfig
disabled (P
load_balancer_type (24.google.container.v1.CloudRunConfig.LoadBalancerType"x
LoadBalancerType"
LOAD_BALANCER_TYPE_UNSPECIFIED 
LOAD_BALANCER_TYPE_EXTERNAL
LOAD_BALANCER_TYPE_INTERNAL"(
ConfigConnectorConfig
enabled ("3
 GcePersistentDiskCsiDriverConfig
enabled (".
GcpFilestoreCsiDriverConfig
enabled ("�
MasterAuthorizedNetworksConfig
enabled (R
cidr_blocks (2=.google.container.v1.MasterAuthorizedNetworksConfig.CidrBlock5
	CidrBlock
display_name (	

cidr_block (	"

LegacyAbac
enabled ("�
NetworkPolicy=
provider (2+.google.container.v1.NetworkPolicy.Provider
enabled ("0
Provider
PROVIDER_UNSPECIFIED 

CALICO"&
BinaryAuthorization
enabled ("�
IPAllocationPolicy
use_ip_aliases (
create_subnetwork (
subnetwork_name (	
cluster_ipv4_cidr (	B
node_ipv4_cidr (	B
services_ipv4_cidr (	B$
cluster_secondary_range_name (	%
services_secondary_range_name (	
cluster_ipv4_cidr_block	 (	
node_ipv4_cidr_block
 (	 
services_ipv4_cidr_block (	
tpu_ipv4_cidr_block (	

use_routes ("�
Cluster
name (	
description (	
initial_node_count (B8
node_config (2.google.container.v1.NodeConfigB4
master_auth (2.google.container.v1.MasterAuth
logging_service (	
monitoring_service (	
network (	
cluster_ipv4_cidr	 (	8
addons_config
 (2!.google.container.v1.AddonsConfig

subnetwork (	1

node_pools (2.google.container.v1.NodePool
	locations (	
enable_kubernetes_alpha (I
resource_labels (20.google.container.v1.Cluster.ResourceLabelsEntry
label_fingerprint (	4
legacy_abac (2.google.container.v1.LegacyAbac:
network_policy (2".google.container.v1.NetworkPolicyE
ip_allocation_policy (2\'.google.container.v1.IPAllocationPolicy^
!master_authorized_networks_config (23.google.container.v1.MasterAuthorizedNetworksConfigB
maintenance_policy (2&.google.container.v1.MaintenancePolicyF
binary_authorization (2(.google.container.v1.BinaryAuthorization<
autoscaling (2\'.google.container.v1.ClusterAutoscaling:
network_config (2".google.container.v1.NetworkConfigK
default_max_pods_constraint (2&.google.container.v1.MaxPodsConstraintT
resource_usage_export_config! (2..google.container.v1.ResourceUsageExportConfigS
authenticator_groups_config" (2..google.container.v1.AuthenticatorGroupsConfigI
private_cluster_config% (2).google.container.v1.PrivateClusterConfigD
database_encryption& (2\'.google.container.v1.DatabaseEncryptionM
vertical_pod_autoscaling\' (2+.google.container.v1.VerticalPodAutoscaling:
shielded_nodes( (2".google.container.v1.ShieldedNodes<
release_channel) (2#.google.container.v1.ReleaseChannelM
workload_identity_config+ (2+.google.container.v1.WorkloadIdentityConfig@
mesh_certificatesC (2%.google.container.v1.MeshCertificatesD
notification_config1 (2\'.google.container.v1.NotificationConfigB
confidential_nodes2 (2&.google.container.v1.ConfidentialNodes
	self_linkd (	
zonee (	B
endpointf (	
initial_cluster_versiong (	
current_master_versionh (	 
current_node_versioni (	B
create_timej (	3
statusk (2#.google.container.v1.Cluster.Status
status_messagel (	B
node_ipv4_cidr_sizem (
services_ipv4_cidrn (	
instance_group_urlso (	B
current_node_countp (B
expire_timeq (	
locationr (	

enable_tpus (
tpu_ipv4_cidr_blockt (	8

conditionsv (2$.google.container.v1.StatusCondition2
	autopilot� (2.google.container.v1.Autopilot
id� (	B�AG
node_pool_defaults� (2%.google.container.v1.NodePoolDefaultsH �;
logging_config� (2".google.container.v1.LoggingConfigA
monitoring_config� (2%.google.container.v1.MonitoringConfig5
ResourceLabelsEntry
key (	
value (	:8"w
Status
STATUS_UNSPECIFIED 
PROVISIONING
RUNNING
RECONCILING
STOPPING	
ERROR
DEGRADEDB
_node_pool_defaults"Y
NodePoolDefaultsE
node_config_defaults (2\'.google.container.v1.NodeConfigDefaults"J
NodeConfigDefaults4
gcfs_config (2.google.container.v1.GcfsConfig"�
ClusterUpdate
desired_node_version (	"
desired_monitoring_service (	@
desired_addons_config (2!.google.container.v1.AddonsConfig
desired_node_pool_id (	
desired_image_type (	L
desired_database_encryption. (2\'.google.container.v1.DatabaseEncryptionU
 desired_workload_identity_config/ (2+.google.container.v1.WorkloadIdentityConfigH
desired_mesh_certificatesC (2%.google.container.v1.MeshCertificatesB
desired_shielded_nodes0 (2".google.container.v1.ShieldedNodes:
desired_dns_config5 (2.google.container.v1.DNSConfigO
desired_node_pool_autoscaling	 (2(.google.container.v1.NodePoolAutoscaling
desired_locations
 (	f
)desired_master_authorized_networks_config (23.google.container.v1.MasterAuthorizedNetworksConfigL
desired_cluster_autoscaling (2\'.google.container.v1.ClusterAutoscalingN
desired_binary_authorization (2(.google.container.v1.BinaryAuthorization
desired_logging_service (	\\
$desired_resource_usage_export_config (2..google.container.v1.ResourceUsageExportConfigU
 desired_vertical_pod_autoscaling (2+.google.container.v1.VerticalPodAutoscalingQ
desired_private_cluster_config (2).google.container.v1.PrivateClusterConfig\\
$desired_intra_node_visibility_config (2..google.container.v1.IntraNodeVisibilityConfigK
desired_default_snat_status (2&.google.container.v1.DefaultSnatStatusD
desired_release_channel (2#.google.container.v1.ReleaseChannelQ
desired_l4ilb_subsetting_config\' (2(.google.container.v1.ILBSubsettingConfigH
desired_datapath_provider2 (2%.google.container.v1.DatapathProviderX
"desired_private_ipv6_google_access3 (2,.google.container.v1.PrivateIPv6GoogleAccessL
desired_notification_config7 (2\'.google.container.v1.NotificationConfig[
#desired_authenticator_groups_config? (2..google.container.v1.AuthenticatorGroupsConfigB
desired_logging_config@ (2".google.container.v1.LoggingConfigH
desired_monitoring_configA (2%.google.container.v1.MonitoringConfigZ
#desired_service_external_ips_config< (2-.google.container.v1.ServiceExternalIPsConfig
desired_master_versiond (	<
desired_gcfs_configm (2.google.container.v1.GcfsConfig"�
	Operation
name (	
zone (	B;
operation_type (2#.google.container.v1.Operation.Type5
status (2%.google.container.v1.Operation.Status
detail (	
status_message (	B�A
	self_link (	
target_link (	
location	 (	

start_time
 (	
end_time (	=
progress (2&.google.container.v1.OperationProgressB�AD
cluster_conditions (2$.google.container.v1.StatusConditionBE
nodepool_conditions (2$.google.container.v1.StatusConditionB!
error (2.google.rpc.Status"R
Status
STATUS_UNSPECIFIED 
PENDING
RUNNING
DONE
ABORTING"�
Type
TYPE_UNSPECIFIED 
CREATE_CLUSTER
DELETE_CLUSTER
UPGRADE_MASTER
UPGRADE_NODES
REPAIR_CLUSTER
UPDATE_CLUSTER
CREATE_NODE_POOL
DELETE_NODE_POOL
SET_NODE_POOL_MANAGEMENT	
AUTO_REPAIR_NODES

AUTO_UPGRADE_NODES

SET_LABELS
SET_MASTER_AUTH
SET_NODE_POOL_SIZE
SET_NETWORK_POLICY
SET_MAINTENANCE_POLICY"�
OperationProgress
name (	5
status (2%.google.container.v1.Operation.Status>
metrics (2-.google.container.v1.OperationProgress.Metric6
stages (2&.google.container.v1.OperationProgressi
Metric
name (	B�A
	int_value (H 
double_value (H 
string_value (	H B
value"�
CreateClusterRequest

project_id (	B
zone (	B2
cluster (2.google.container.v1.ClusterB�A
parent (	"c
GetClusterRequest

project_id (	B
zone (	B

cluster_id (	B
name (	"�
UpdateClusterRequest

project_id (	B
zone (	B

cluster_id (	B7
update (2".google.container.v1.ClusterUpdateB�A
name (	"�
UpdateNodePoolRequest

project_id (	B
zone (	B

cluster_id (	B
node_pool_id (	B
node_version (	B�A

image_type (	B�A
name (	
	locations (	M
workload_metadata_config (2+.google.container.v1.WorkloadMetadataConfigG
upgrade_settings (2-.google.container.v1.NodePool.UpgradeSettings?
linux_node_config (2$.google.container.v1.LinuxNodeConfig>
kubelet_config (2&.google.container.v1.NodeKubeletConfig4
gcfs_config (2.google.container.v1.GcfsConfig.
gvnic (2.google.container.v1.VirtualNIC"�
SetNodePoolAutoscalingRequest

project_id (	B
zone (	B

cluster_id (	B
node_pool_id (	BB
autoscaling (2(.google.container.v1.NodePoolAutoscalingB�A
name (	"�
SetLoggingServiceRequest

project_id (	B
zone (	B

cluster_id (	B
logging_service (	B�A
name (	"�
SetMonitoringServiceRequest

project_id (	B
zone (	B

cluster_id (	B
monitoring_service (	B�A
name (	"�
SetAddonsConfigRequest

project_id (	B
zone (	B

cluster_id (	B=
addons_config (2!.google.container.v1.AddonsConfigB�A
name (	"}
SetLocationsRequest

project_id (	B
zone (	B

cluster_id (	B
	locations (	B�A
name (	"�
UpdateMasterRequest

project_id (	B
zone (	B

cluster_id (	B
master_version (	B�A
name (	"�
SetMasterAuthRequest

project_id (	B
zone (	B

cluster_id (	BE
action (20.google.container.v1.SetMasterAuthRequest.ActionB�A4
update (2.google.container.v1.MasterAuthB�A
name (	"P
Action
UNKNOWN 
SET_PASSWORD
GENERATE_PASSWORD
SET_USERNAME"f
DeleteClusterRequest

project_id (	B
zone (	B

cluster_id (	B
name (	"O
ListClustersRequest

project_id (	B
zone (	B
parent (	"]
ListClustersResponse.
clusters (2.google.container.v1.Cluster
missing_zones (	"g
GetOperationRequest

project_id (	B
zone (	B
operation_id (	B
name (	"Q
ListOperationsRequest

project_id (	B
zone (	B
parent (	"j
CancelOperationRequest

project_id (	B
zone (	B
operation_id (	B
name (	"c
ListOperationsResponse2

operations (2.google.container.v1.Operation
missing_zones (	"P
GetServerConfigRequest

project_id (	B
zone (	B
name (	"�
ServerConfig
default_cluster_version (	
valid_node_versions (	
default_image_type (	
valid_image_types (	
valid_master_versions (	H
channels	 (26.google.container.v1.ServerConfig.ReleaseChannelConfig�
ReleaseChannelConfig<
channel (2+.google.container.v1.ReleaseChannel.Channel
default_version (	
valid_versions (	"�
CreateNodePoolRequest

project_id (	B
zone (	B

cluster_id (	B5
	node_pool (2.google.container.v1.NodePoolB�A
parent (	"�
DeleteNodePoolRequest

project_id (	B
zone (	B

cluster_id (	B
node_pool_id (	B
name (	"h
ListNodePoolsRequest

project_id (	B
zone (	B

cluster_id (	B
parent (	"~
GetNodePoolRequest

project_id (	B
zone (	B

cluster_id (	B
node_pool_id (	B
name (	"�
NodePool
name (	/
config (2.google.container.v1.NodeConfig
initial_node_count (
	locations (	>
network_config (2&.google.container.v1.NodeNetworkConfig
	self_linkd (	
versione (	
instance_group_urlsf (	4
statusg (2$.google.container.v1.NodePool.Status
status_messageh (	B=
autoscaling (2(.google.container.v1.NodePoolAutoscaling7

management (2#.google.container.v1.NodeManagementC
max_pods_constraint (2&.google.container.v1.MaxPodsConstraint8

conditionsi (2$.google.container.v1.StatusCondition
pod_ipv4_cidr_size (G
upgrade_settingsk (2-.google.container.v1.NodePool.UpgradeSettings=
UpgradeSettings
	max_surge (
max_unavailable ("�
Status
STATUS_UNSPECIFIED 
PROVISIONING
RUNNING
RUNNING_WITH_ERROR
RECONCILING
STOPPING	
ERROR"}
NodeManagement
auto_upgrade (
auto_repair (@
upgrade_options
 (2\'.google.container.v1.AutoUpgradeOptions"J
AutoUpgradeOptions
auto_upgrade_start_time (	
description (	"e
MaintenancePolicy6
window (2&.google.container.v1.MaintenanceWindow
resource_version (	"�
MaintenanceWindowO
daily_maintenance_window (2+.google.container.v1.DailyMaintenanceWindowH D
recurring_window (2(.google.container.v1.RecurringTimeWindowH a
maintenance_exclusions (2A.google.container.v1.MaintenanceWindow.MaintenanceExclusionsEntry]
MaintenanceExclusionsEntry
key (	.
value (2.google.container.v1.TimeWindow:8B
policy"�

TimeWindowY
maintenance_exclusion_options (20.google.container.v1.MaintenanceExclusionOptionsH .

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.TimestampB	
options"�
MaintenanceExclusionOptionsE
scope (26.google.container.v1.MaintenanceExclusionOptions.Scope"N
Scope
NO_UPGRADES 
NO_MINOR_UPGRADES
NO_MINOR_OR_NODE_UPGRADES"Z
RecurringTimeWindow/
window (2.google.container.v1.TimeWindow

recurrence (	">
DailyMaintenanceWindow

start_time (	
duration (	"�
SetNodePoolManagementRequest

project_id (	B
zone (	B

cluster_id (	B
node_pool_id (	B<

management (2#.google.container.v1.NodeManagementB�A
name (	"�
SetNodePoolSizeRequest

project_id (	B
zone (	B

cluster_id (	B
node_pool_id (	B

node_count (B�A
name (	"�
RollbackNodePoolUpgradeRequest

project_id (	B
zone (	B

cluster_id (	B
node_pool_id (	B
name (	"J
ListNodePoolsResponse1

node_pools (2.google.container.v1.NodePool"�
ClusterAutoscaling$
enable_node_autoprovisioning (;
resource_limits (2".google.container.v1.ResourceLimitW
autoscaling_profile (2:.google.container.v1.ClusterAutoscaling.AutoscalingProfileb
#autoprovisioning_node_pool_defaults (25.google.container.v1.AutoprovisioningNodePoolDefaults"
autoprovisioning_locations (	"U
AutoscalingProfile
PROFILE_UNSPECIFIED 
OPTIMIZE_UTILIZATION
BALANCED"�
 AutoprovisioningNodePoolDefaults
oauth_scopes (	
service_account (	G
upgrade_settings (2-.google.container.v1.NodePool.UpgradeSettings7

management (2#.google.container.v1.NodeManagement
min_cpu_platform (	
disk_size_gb (
	disk_type (	M
shielded_instance_config (2+.google.container.v1.ShieldedInstanceConfig
boot_disk_kms_key	 (	

image_type
 (	"H
ResourceLimit
resource_type (	
minimum (
maximum ("o
NodePoolAutoscaling
enabled (
min_node_count (
max_node_count (
autoprovisioned ("�
SetLabelsRequest

project_id (	B
zone (	B

cluster_id (	BW
resource_labels (29.google.container.v1.SetLabelsRequest.ResourceLabelsEntryB�A
label_fingerprint (	B�A
name (	5
ResourceLabelsEntry
key (	
value (	:8"|
SetLegacyAbacRequest

project_id (	B
zone (	B

cluster_id (	B
enabled (B�A
name (	"�
StartIPRotationRequest

project_id (	B
zone (	B

cluster_id (	B
name (	
rotate_credentials ("k
CompleteIPRotationRequest

project_id (	B
zone (	B

cluster_id (	B
name (	"d
AcceleratorConfig
accelerator_count (
accelerator_type (	
gpu_partition_size (	"�
WorkloadMetadataConfig>
mode (20.google.container.v1.WorkloadMetadataConfig.Mode"@
Mode
MODE_UNSPECIFIED 
GCE_METADATA
GKE_METADATA"�
SetNetworkPolicyRequest

project_id (	B
zone (	B

cluster_id (	B?
network_policy (2".google.container.v1.NetworkPolicyB�A
name (	"�
SetMaintenancePolicyRequest

project_id (	B�A
zone (	B�A

cluster_id (	B�AG
maintenance_policy (2&.google.container.v1.MaintenancePolicyB�A
name (	"�
StatusCondition;
code (2).google.container.v1.StatusCondition.CodeB
message (	(
canonical_code (2.google.rpc.Code"�
Code
UNKNOWN 
GCE_STOCKOUT
GKE_SERVICE_ACCOUNT_DELETED
GCE_QUOTA_EXCEEDED
SET_BY_OPERATOR
CLOUD_KMS_KEY_ERROR
CA_EXPIRING	"�
NetworkConfig
network (	

subnetwork (	$
enable_intra_node_visibility (C
default_snat_status (2&.google.container.v1.DefaultSnatStatus
enable_l4ilb_subsetting
 (@
datapath_provider (2%.google.container.v1.DatapathProviderP
private_ipv6_google_access (2,.google.container.v1.PrivateIPv6GoogleAccess2

dns_config (2.google.container.v1.DNSConfigR
service_external_ips_config (2-.google.container.v1.ServiceExternalIPsConfig"+
ServiceExternalIPsConfig
enabled ("(
GetOpenIDConfigRequest
parent (	"�
GetOpenIDConfigResponse
issuer (	
jwks_uri (	 
response_types_supported (	
subject_types_supported (	-
%id_token_signing_alg_values_supported (	
claims_supported (	
grant_types (	"\'
GetJSONWebKeysRequest
parent (	"r
Jwk
kty (	
alg (	
use (	
kid (		
n (		
e (		
x (		
y (	
crv	 (	"@
GetJSONWebKeysResponse&
keys (2.google.container.v1.Jwk"�
ReleaseChannel<
channel (2+.google.container.v1.ReleaseChannel.Channel">
Channel
UNSPECIFIED 	
RAPID
REGULAR

STABLE",
IntraNodeVisibilityConfig
enabled ("&
ILBSubsettingConfig
enabled ("�
	DNSConfig<
cluster_dns (2\'.google.container.v1.DNSConfig.ProviderB
cluster_dns_scope (2\'.google.container.v1.DNSConfig.DNSScope
cluster_dns_domain (	"I
Provider
PROVIDER_UNSPECIFIED 
PLATFORM_DEFAULT
	CLOUD_DNS"4
DNSScope
DNS_SCOPE_UNSPECIFIED 
	VPC_SCOPE".
MaxPodsConstraint
max_pods_per_node ("/
WorkloadIdentityConfig
workload_pool (	"K
MeshCertificates7
enable_certificates (2.google.protobuf.BoolValue"�
DatabaseEncryption<
state (2-.google.container.v1.DatabaseEncryption.State
key_name (	"2
State
UNKNOWN 
	ENCRYPTED
	DECRYPTED"e
ListUsableSubnetworksRequest
parent (	
filter (	
	page_size (

page_token (	"t
ListUsableSubnetworksResponse:
subnetworks (2%.google.container.v1.UsableSubnetwork
next_page_token (	"�
UsableSubnetworkSecondaryRange

range_name (	
ip_cidr_range (	J
status (2:.google.container.v1.UsableSubnetworkSecondaryRange.Status"g
Status
UNKNOWN 

UNUSED
IN_USE_SERVICE
IN_USE_SHAREABLE_POD
IN_USE_MANAGED_POD"�
UsableSubnetwork

subnetwork (	
network (	
ip_cidr_range (	P
secondary_ip_ranges (23.google.container.v1.UsableSubnetworkSecondaryRange
status_message (	"�
ResourceUsageExportConfig`
bigquery_destination (2B.google.container.v1.ResourceUsageExportConfig.BigQueryDestination&
enable_network_egress_metering (m
consumption_metering_config (2H.google.container.v1.ResourceUsageExportConfig.ConsumptionMeteringConfig)
BigQueryDestination

dataset_id (	,
ConsumptionMeteringConfig
enabled (")
VerticalPodAutoscaling
enabled ("%
DefaultSnatStatus
disabled (" 
ShieldedNodes
enabled ("

VirtualNIC
enabled ("�
NotificationConfig>
pubsub (2..google.container.v1.NotificationConfig.PubSub�
PubSub
enabled (/
topic (	B �A
pubsub.googleapis.com/Topic>
filter (2..google.container.v1.NotificationConfig.FilterO
FilterE

event_type (21.google.container.v1.NotificationConfig.EventType"t
	EventType
EVENT_TYPE_UNSPECIFIED 
UPGRADE_AVAILABLE_EVENT
UPGRADE_EVENT
SECURITY_BULLETIN_EVENT"$
ConfidentialNodes
enabled ("�
UpgradeEvent?
resource_type (2(.google.container.v1.UpgradeResourceType
	operation (	8
operation_start_time (2.google.protobuf.Timestamp
current_version (	
target_version (	
resource (	"�
UpgradeAvailableEvent
version (	?
resource_type (2(.google.container.v1.UpgradeResourceType<
release_channel (2#.google.container.v1.ReleaseChannel
resource (	"�
SecurityBulletinEvent
resource_type_affected (	
bulletin_id (	
cve_ids (	
severity (	
bulletin_uri (	
brief_description (	!
affected_supported_minors (	
patched_versions (	 
suggested_upgrade_target	 (	
manual_steps_required
 ("
	Autopilot
enabled ("V
LoggingConfigE
component_config (2+.google.container.v1.LoggingComponentConfig"�
LoggingComponentConfigP
enable_components (25.google.container.v1.LoggingComponentConfig.Component"L
	Component
COMPONENT_UNSPECIFIED 
SYSTEM_COMPONENTS
	WORKLOADS"\\
MonitoringConfigH
component_config (2..google.container.v1.MonitoringComponentConfig"�
MonitoringComponentConfigS
enable_components (28.google.container.v1.MonitoringComponentConfig.Component"=
	Component
COMPONENT_UNSPECIFIED 
SYSTEM_COMPONENTS*�
PrivateIPv6GoogleAccess*
&PRIVATE_IPV6_GOOGLE_ACCESS_UNSPECIFIED \'
#PRIVATE_IPV6_GOOGLE_ACCESS_DISABLED(
$PRIVATE_IPV6_GOOGLE_ACCESS_TO_GOOGLE,
(PRIVATE_IPV6_GOOGLE_ACCESS_BIDIRECTIONAL*a
DatapathProvider!
DATAPATH_PROVIDER_UNSPECIFIED 
LEGACY_DATAPATH
ADVANCED_DATAPATH*W
UpgradeResourceType%
!UPGRADE_RESOURCE_TYPE_UNSPECIFIED 

MASTER
	NODE_POOL2�F
ClusterManager�
ListClusters(.google.container.v1.ListClustersRequest).google.container.v1.ListClustersResponse"����a,/v1/{parent=projects/*/locations/*}/clustersZ1//v1/projects/{project_id}/zones/{zone}/clusters�Aproject_id,zone�Aparent�

GetCluster&.google.container.v1.GetClusterRequest.google.container.v1.Cluster"����n,/v1/{name=projects/*/locations/*/clusters/*}Z></v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}�Aproject_id,zone,cluster_id�Aname�
CreateCluster).google.container.v1.CreateClusterRequest.google.container.v1.Operation"����g",/v1/{parent=projects/*/locations/*}/clusters:*Z4"//v1/projects/{project_id}/zones/{zone}/clusters:*�Aproject_id,zone,cluster�Aparent,cluster�
UpdateCluster).google.container.v1.UpdateClusterRequest.google.container.v1.Operation"����t,/v1/{name=projects/*/locations/*/clusters/*}:*ZA</v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}:*�A!project_id,zone,cluster_id,update�Aname,update�
UpdateNodePool*.google.container.v1.UpdateNodePoolRequest.google.container.v1.Operation"�����8/v1/{name=projects/*/locations/*/clusters/*/nodePools/*}:*Za"\\/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools/{node_pool_id}/update:*�
SetNodePoolAutoscaling2.google.container.v1.SetNodePoolAutoscalingRequest.google.container.v1.Operation"�����"G/v1/{name=projects/*/locations/*/clusters/*/nodePools/*}:setAutoscaling:*Zf"a/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools/{node_pool_id}/autoscaling:*�
SetLoggingService-.google.container.v1.SetLoggingServiceRequest.google.container.v1.Operation"�����"7/v1/{name=projects/*/locations/*/clusters/*}:setLogging:*ZI"D/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/logging:*�A*project_id,zone,cluster_id,logging_service�Aname,logging_service�
SetMonitoringService0.google.container.v1.SetMonitoringServiceRequest.google.container.v1.Operation"�����":/v1/{name=projects/*/locations/*/clusters/*}:setMonitoring:*ZL"G/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/monitoring:*�A-project_id,zone,cluster_id,monitoring_service�Aname,monitoring_service�
SetAddonsConfig+.google.container.v1.SetAddonsConfigRequest.google.container.v1.Operation"�����"6/v1/{name=projects/*/locations/*/clusters/*}:setAddons:*ZH"C/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/addons:*�A(project_id,zone,cluster_id,addons_config�Aname,addons_config�
SetLocations(.google.container.v1.SetLocationsRequest.google.container.v1.Operation"������"9/v1/{name=projects/*/locations/*/clusters/*}:setLocations:*ZK"F/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/locations:*�A$project_id,zone,cluster_id,locations�Aname,locations�
UpdateMaster(.google.container.v1.UpdateMasterRequest.google.container.v1.Operation"�����"9/v1/{name=projects/*/locations/*/clusters/*}:updateMaster:*ZH"C/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/master:*�A)project_id,zone,cluster_id,master_version�Aname,master_version�
SetMasterAuth).google.container.v1.SetMasterAuthRequest.google.container.v1.Operation"�����":/v1/{name=projects/*/locations/*/clusters/*}:setMasterAuth:*ZO"J/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}:setMasterAuth:*�
DeleteCluster).google.container.v1.DeleteClusterRequest.google.container.v1.Operation"����n*,/v1/{name=projects/*/locations/*/clusters/*}Z>*</v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}�Aproject_id,zone,cluster_id�Aname�
ListOperations*.google.container.v1.ListOperationsRequest+.google.container.v1.ListOperationsResponse"}���e./v1/{parent=projects/*/locations/*}/operationsZ31/v1/projects/{project_id}/zones/{zone}/operations�Aproject_id,zone�
GetOperation(.google.container.v1.GetOperationRequest.google.container.v1.Operation"����t./v1/{name=projects/*/locations/*/operations/*}ZB@/v1/projects/{project_id}/zones/{zone}/operations/{operation_id}�Aproject_id,zone,operation_id�Aname�
CancelOperation+.google.container.v1.CancelOperationRequest.google.protobuf.Empty"�����"5/v1/{name=projects/*/locations/*/operations/*}:cancel:*ZL"G/v1/projects/{project_id}/zones/{zone}/operations/{operation_id}:cancel:*�Aproject_id,zone,operation_id�Aname�
GetServerConfig+.google.container.v1.GetServerConfigRequest!.google.container.v1.ServerConfig"����g./v1/{name=projects/*/locations/*}/serverConfigZ53/v1/projects/{project_id}/zones/{zone}/serverconfig�Aproject_id,zone�Aname�
GetJSONWebKeys*.google.container.v1.GetJSONWebKeysRequest+.google.container.v1.GetJSONWebKeysResponse";���53/v1/{parent=projects/*/locations/*/clusters/*}/jwks�
ListNodePools).google.container.v1.ListNodePoolsRequest*.google.container.v1.ListNodePoolsResponse"�����8/v1/{parent=projects/*/locations/*/clusters/*}/nodePoolsZHF/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools�Aproject_id,zone,cluster_id�Aparent�
GetNodePool\'.google.container.v1.GetNodePoolRequest.google.container.v1.NodePool"�����8/v1/{name=projects/*/locations/*/clusters/*/nodePools/*}ZWU/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools/{node_pool_id}�A\'project_id,zone,cluster_id,node_pool_id�Aname�
CreateNodePool*.google.container.v1.CreateNodePoolRequest.google.container.v1.Operation"�����"8/v1/{parent=projects/*/locations/*/clusters/*}/nodePools:*ZK"F/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools:*�A$project_id,zone,cluster_id,node_pool�Aparent,node_pool�
DeleteNodePool*.google.container.v1.DeleteNodePoolRequest.google.container.v1.Operation"�����*8/v1/{name=projects/*/locations/*/clusters/*/nodePools/*}ZW*U/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools/{node_pool_id}�A\'project_id,zone,cluster_id,node_pool_id�Aname�
RollbackNodePoolUpgrade3.google.container.v1.RollbackNodePoolUpgradeRequest.google.container.v1.Operation"�����"A/v1/{name=projects/*/locations/*/clusters/*/nodePools/*}:rollback:*Zc"^/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools/{node_pool_id}:rollback:*�A\'project_id,zone,cluster_id,node_pool_id�Aname�
SetNodePoolManagement1.google.container.v1.SetNodePoolManagementRequest.google.container.v1.Operation"�����"F/v1/{name=projects/*/locations/*/clusters/*/nodePools/*}:setManagement:*Zh"c/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools/{node_pool_id}/setManagement:*�
	SetLabels%.google.container.v1.SetLabelsRequest.google.container.v1.Operation"�����">/v1/{name=projects/*/locations/*/clusters/*}:setResourceLabels:*ZP"K/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/resourceLabels:*�
SetLegacyAbac).google.container.v1.SetLegacyAbacRequest.google.container.v1.Operation"�����":/v1/{name=projects/*/locations/*/clusters/*}:setLegacyAbac:*ZL"G/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/legacyAbac:*�A"project_id,zone,cluster_id,enabled�Aname,enabled�
StartIPRotation+.google.container.v1.StartIPRotationRequest.google.container.v1.Operation"�����"</v1/{name=projects/*/locations/*/clusters/*}:startIpRotation:*ZQ"L/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}:startIpRotation:*�Aproject_id,zone,cluster_id�Aname�
CompleteIPRotation..google.container.v1.CompleteIPRotationRequest.google.container.v1.Operation"�����"?/v1/{name=projects/*/locations/*/clusters/*}:completeIpRotation:*ZT"O/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}:completeIpRotation:*�Aproject_id,zone,cluster_id�Aname�
SetNodePoolSize+.google.container.v1.SetNodePoolSizeRequest.google.container.v1.Operation"�����"@/v1/{name=projects/*/locations/*/clusters/*/nodePools/*}:setSize:*Zb"]/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}/nodePools/{node_pool_id}/setSize:*�
SetNetworkPolicy,.google.container.v1.SetNetworkPolicyRequest.google.container.v1.Operation"�����"=/v1/{name=projects/*/locations/*/clusters/*}:setNetworkPolicy:*ZR"M/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}:setNetworkPolicy:*�A)project_id,zone,cluster_id,network_policy�Aname,network_policy�
SetMaintenancePolicy0.google.container.v1.SetMaintenancePolicyRequest.google.container.v1.Operation"�����"A/v1/{name=projects/*/locations/*/clusters/*}:setMaintenancePolicy:*ZV"Q/v1/projects/{project_id}/zones/{zone}/clusters/{cluster_id}:setMaintenancePolicy:*�A-project_id,zone,cluster_id,maintenance_policy�Aname,maintenance_policy�
ListUsableSubnetworks1.google.container.v1.ListUsableSubnetworksRequest2.google.container.v1.ListUsableSubnetworksResponse"<���64/v1/{parent=projects/*}/aggregated/usableSubnetworksL�Acontainer.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.container.v1BClusterServiceProtoPZ<google.golang.org/genproto/googleapis/container/v1;container�Google.Cloud.Container.V1�Google\\Cloud\\Container\\V1�Google::Cloud::Container::V1�A@
pubsub.googleapis.com/Topic!projects/{project}/topics/{topic}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

