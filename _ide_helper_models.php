<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $phoneN0
 * @property string $email
 * @property string $profilePicture
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Database\Factories\AdminFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePhoneN0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereProfilePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AssignedTask
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $AssignedBy
 * @property int|null $AssignedTo
 * @property int|null $TaskAccepted
 * @property int|null $TaskRejected
 * @property int|null $TaskPostpone
 * @property int|null $TaskStatus
 * @property string|null $StartTime
 * @property string|null $EndTime
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AssignedTaskFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereAssignedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereAssignedTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereTaskAccepted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereTaskPostpone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereTaskRejected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereTaskStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignedTask whereUpdatedAt($value)
 */
	class AssignedTask extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Brand
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BrandFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Car
 *
 * @property int $id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CarFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereUpdatedAt($value)
 */
	class Car extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarMakerYear
 *
 * @method static \Database\Factories\CarMakerYearFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CarMakerYear newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarMakerYear newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarMakerYear query()
 */
	class CarMakerYear extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarModel
 *
 * @property int $id
 * @property int|null $card_id
 * @property string|null $CarModel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereCarModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereCardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarModel whereUpdatedAt($value)
 */
	class CarModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarRepairEvidence
 *
 * @property int $id
 * @property int|null $orderassignto_id
 * @property string|null $FaultyComponentPictures
 * @property string|null $VoiceRecord
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\OrderAssignTo|null $orderassignto
 * @method static \Database\Factories\CarRepairEvidenceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence whereFaultyComponentPictures($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence whereOrderassigntoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarRepairEvidence whereVoiceRecord($value)
 */
	class CarRepairEvidence extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarServiceType
 *
 * @property int $id
 * @property int|null $major_service_type_id
 * @property string|null $serviceType
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CarServiceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarServiceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarServiceType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarServiceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarServiceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarServiceType whereMajorServiceTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarServiceType whereServiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarServiceType whereUpdatedAt($value)
 */
	class CarServiceType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string|null $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models\CompanyAssets{
/**
 * App\Models\CompanyAssets\CarFuelling
 *
 * @property int $id
 * @property int|null $vehicle_id
 * @property int|null $department_id
 * @property int|null $FuelLiter
 * @property int|null $UnitCost
 * @property \Illuminate\Support\Carbon $DateFuelled
 * @property int|null $RefilledBy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $refilledBy
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereDateFuelled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereFuelLiter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereRefilledBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarFuelling whereVehicleId($value)
 */
	class CarFuelling extends \Eloquent {}
}

namespace App\Models\CompanyAssets{
/**
 * App\Models\CompanyAssets\Carservice
 *
 * @property int $id
 * @property int|null $vehicle_id
 * @property bool|null $isCustomerCar
 * @property int|null $customer_id
 * @property bool|null $isCompanyCar
 * @property int|null $partfault_id
 * @property string|null $fualtyCOmponentPicture
 * @property int|null $RepairCost
 * @property int|null $TotalCost
 * @property int|null $ServiceBy
 * @property \Illuminate\Support\Carbon $DateService
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer|null $customer
 * @property-read \App\Models\User $serviceBy
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereDateService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereFualtyCOmponentPicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereIsCompanyCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereIsCustomerCar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice wherePartfaultId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereRepairCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereServiceBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereTotalCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carservice whereVehicleId($value)
 */
	class Carservice extends \Eloquent {}
}

namespace App\Models\CompanyAssets{
/**
 * App\Models\CompanyAssets\Vehicle
 *
 * @property int $id
 * @property string|null $name
 * @property string $type
 * @property string $Model
 * @property \Illuminate\Support\Carbon $YearMake
 * @property \Illuminate\Support\Carbon $YearPurchased
 * @property string $ChassisN0
 * @property int|null $AssignedDriver
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $assignedDriver
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompanyAssets\VehicleDocument[] $vehicleDocuments
 * @property-read int|null $vehicle_documents_count
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereAssignedDriver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereChassisN0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereYearMake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereYearPurchased($value)
 */
	class Vehicle extends \Eloquent {}
}

namespace App\Models\CompanyAssets{
/**
 * App\Models\CompanyAssets\VehicleDocument
 *
 * @property int $id
 * @property int|null $vehicle_id
 * @property string|null $DocumentName
 * @property string|null $DocumentPaper
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument whereDocumentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument whereDocumentPaper($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleDocument whereVehicleId($value)
 */
	class VehicleDocument extends \Eloquent {}
}

namespace App\Models\CompanyAssets{
/**
 * App\Models\CompanyAssets\VehiclePartDetail
 *
 * @property int $id
 * @property int|null $vehicle_id
 * @property string|null $OilType
 * @property int|null $OilMeter
 * @property bool|null $OilfilterGuaged
 * @property string|null $BatteryUsed
 * @property bool|null $ACCondition
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereACCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereBatteryUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereOilMeter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereOilType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereOilfilterGuaged($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehiclePartDetail whereVehicleId($value)
 */
	class VehiclePartDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $currency
 * @property string $symbol
 * @property int|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CurrencyFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereValue($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Customer
 *
 * @property int $id
 * @property string $FirstName
 * @property string $LastName
 * @property string|null $OtherName
 * @property string $PhoneNo
 * @property string|null $PhoneNo2
 * @property string|null $ProfileImage
 * @property string $email
 * @property string $Address
 * @property int|null $city_id
 * @property int|null $state_id
 * @property string $password
 * @property mixed|null $CurrentGpsLocationLong
 * @property mixed|null $CurrentGpsLocationLat
 * @property bool $CustomerStatus
 * @property int $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\CustomerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCurrentGpsLocationLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCurrentGpsLocationLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCustomerStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereOtherName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhoneNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePhoneNo2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereProfileImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CustomerType
 *
 * @property int $id
 * @property string|null $Type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Customer[] $customers
 * @property-read int|null $customers_count
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerType whereUpdatedAt($value)
 */
	class CustomerType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $id
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Admin[] $admins
 * @property-read int|null $admins_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\DepartmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $Firstname
 * @property string $Lastname
 * @property string|null $Othername
 * @property string $MobileN01
 * @property string|null $MobileN02
 * @property string|null $MobileN03
 * @property string|null $ProfilePhoto
 * @property string|null $ResidentailAddress
 * @property string|null $City
 * @property string $DOB
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserDocument[] $documents
 * @property-read int|null $documents_count
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDOB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMobileN01($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMobileN02($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereMobileN03($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereOthername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereResidentailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 */
	class Employee extends \Eloquent {}
}

namespace App\Models\Lookups{
/**
 * App\Models\Lookups\City
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $state_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Lookups\State|null $state
 * @method static \Database\Factories\Lookups\CityFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models\Lookups{
/**
 * App\Models\Lookups\Country
 *
 * @property int $id
 * @property string|null $sortname
 * @property string|null $name
 * @property int|null $phonecode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Lookups\State[] $states
 * @property-read int|null $states_count
 * @method static \Database\Factories\Lookups\CountryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country wherePhonecode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSortname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models\Lookups{
/**
 * App\Models\Lookups\State
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Lookups\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \App\Models\Lookups\Country|null $country
 * @method static \Database\Factories\Lookups\StateFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MajorServiceType
 *
 * @property int $id
 * @property string|null $MajorType
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MajorServiceTypeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|MajorServiceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MajorServiceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MajorServiceType query()
 * @method static \Illuminate\Database\Eloquent\Builder|MajorServiceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MajorServiceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MajorServiceType whereMajorType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MajorServiceType whereUpdatedAt($value)
 */
	class MajorServiceType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OilFilter
 *
 * @property int $id
 * @property int|null $vehicle_id
 * @property \Illuminate\Support\Carbon $WhenFIlterChanged
 * @property \Illuminate\Support\Carbon $ExpectedNextChange
 * @property int|null $ChangedBy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $changedBy
 * @property-read \App\Models\CompanyAssets\Vehicle|null $vehicle
 * @method static \Database\Factories\OilFilterFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter query()
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter whereChangedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter whereExpectedNextChange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter whereVehicleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OilFilter whereWhenFIlterChanged($value)
 */
	class OilFilter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int|null $customer_id
 * @property string $OrderTrackN0
 * @property int|null $stock_id
 * @property \Illuminate\Support\Carbon $DateOrders
 * @property bool|null $isOrderService
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Customer|null $customer
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderItem[] $orderItems
 * @property-read int|null $order_items_count
 * @property-read \App\Models\Stock|null $stock
 * @method static \Database\Factories\OrderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDateOrders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIsOrderService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderTrackN0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderAssignTo
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $AssignedTo
 * @property bool|null $OrderCompleted
 * @property int $AssignedBy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $assignedBy
 * @property-read \App\Models\User $assignedTo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarRepairEvidence[] $carRepairEvidences
 * @property-read int|null $car_repair_evidences_count
 * @property-read \App\Models\Order|null $order
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Database\Factories\OrderAssignToFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo whereAssignedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo whereAssignedTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo whereOrderCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderAssignTo whereUpdatedAt($value)
 */
	class OrderAssignTo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderItem
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $category_id
 * @property int|null $stock_id
 * @property int|null $QtyOrdered
 * @property int|null $UnitCost
 * @property int|null $TotalCost
 * @property \Illuminate\Support\Carbon $DateOrder
 * @property bool $OrderServiced
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Order|null $order
 * @property-read \App\Models\Stock|null $stock
 * @method static \Database\Factories\OrderItemFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereDateOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereOrderServiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereQtyOrdered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereStockId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereTotalCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUpdatedAt($value)
 */
	class OrderItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PartFault
 *
 * @property int $id
 * @property string|null $partFualty
 * @property string $ExactFualt
 * @property int|null $PartReplacewith
 * @property int|null $PartChanged
 * @property string|null $fualtyCOmponentPicture
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Stock $partChanged
 * @property-read \App\Models\Stock $partReplacewith
 * @method static \Database\Factories\PartFaultFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault query()
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault whereExactFualt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault whereFualtyCOmponentPicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault wherePartChanged($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault wherePartFualty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault wherePartReplacewith($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PartFault whereUpdatedAt($value)
 */
	class PartFault extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ScheduleMaintenance
 *
 * @property int $id
 * @property string|null $ServiceList
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ScheduleMaintenanceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleMaintenance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleMaintenance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleMaintenance query()
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleMaintenance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleMaintenance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleMaintenance whereServiceList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScheduleMaintenance whereUpdatedAt($value)
 */
	class ScheduleMaintenance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sparepart
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sparepart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sparepart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sparepart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sparepart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sparepart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sparepart whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sparepart whereUpdatedAt($value)
 */
	class Sparepart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Stock
 *
 * @property int $id
 * @property string $partTrackN0
 * @property int|null $category_id
 * @property string $partName
 * @property int|null $UnitCost
 * @property string $Maker
 * @property string $ModelNo
 * @property \Illuminate\Support\Carbon $DateStock
 * @property string|null $Type
 * @property int|null $QtyInstock
 * @property int|null $Availability
 * @property string|null $status
 * @property int|null $stockBy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @method static \Database\Factories\StockFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock query()
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereDateStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereMaker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereModelNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock wherePartName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock wherePartTrackN0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereQtyInstock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereStockBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Stock whereUpdatedAt($value)
 */
	class Stock extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StockCount
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $QtyInstock
 * @property int|null $stockUpdatedBy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @method static \Database\Factories\StockCountFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount query()
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereQtyInstock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereStockUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockCount whereUpdatedAt($value)
 */
	class StockCount extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $Firstname
 * @property string $Lastname
 * @property string|null $Othername
 * @property int|null $department_id
 * @property string $MobileN01
 * @property string $MobileN02
 * @property string|null $MobileN03
 * @property string|null $ProfilePhoto
 * @property string $ResidentialAddress
 * @property string|null $City
 * @property \Illuminate\Support\Carbon $DOB
 * @property string $email
 * @property \Illuminate\Support\Carbon $email_verified_at
 * @property string $password
 * @property string|null $securityPin
 * @property string|null $username
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Department|null $department
 * @property-read mixed $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserDocument[] $userDocuments
 * @property-read int|null $user_documents_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDOB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileN01($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileN02($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobileN03($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOthername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereResidentialAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSecurityPin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserDocument
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $IdCard
 * @property string|null $NationalIDCardN0
 * @property string|null $PassportDocument
 * @property string|null $LegalPapersUploaded
 * @property string|null $OtherDocsHandPrint
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\UserDocumentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereIdCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereLegalPapersUploaded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereNationalIDCardN0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereOtherDocsHandPrint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument wherePassportDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDocument whereUserId($value)
 */
	class UserDocument extends \Eloquent {}
}

