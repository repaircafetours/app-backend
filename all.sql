create table
    `users` (
        `id` bigint unsigned not null auto_increment primary key,
        `name` varchar(255) not null,
        `email` varchar(255) not null,
        `email_verified_at` timestamp null,
        `password` varchar(255) not null,
        `remember_token` varchar(100) null,
        `created_at` timestamp null,
        `updated_at` timestamp null
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
alter table `users` add unique `users_email_unique` (`email`)
create table
    `password_reset_tokens` (
        `email` varchar(255) not null,
        `token` varchar(255) not null,
        `created_at` timestamp null,
        primary key (`email`)
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
create table
    `sessions` (
        `id` varchar(255) not null,
        `user_id` bigint unsigned null,
        `ip_address` varchar(45) null,
        `user_agent` text null,
        `payload` longtext not null,
        `last_activity` int not null,
        primary key (`id`)
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
alter table `sessions` add index `sessions_user_id_index` (`user_id`)
alter table `sessions` add index `sessions_last_activity_index` (`last_activity`)
create table
    `cache` (
        `key` varchar(255) not null,
        `value` mediumtext not null,
        `expiration` int not null,
        primary key (`key`)
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
create table
    `cache_locks` (
        `key` varchar(255) not null,
        `owner` varchar(255) not null,
        `expiration` int not null,
        primary key (`key`)
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
create table
    `jobs` (
        `id` bigint unsigned not null auto_increment primary key,
        `queue` varchar(255) not null,
        `payload` longtext not null,
        `attempts` tinyint unsigned not null,
        `reserved_at` int unsigned null,
        `available_at` int unsigned not null,
        `created_at` int unsigned not null
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
alter table `jobs` add index `jobs_queue_index` (`queue`)
create table
    `job_batches` (
        `id` varchar(255) not null,
        `name` varchar(255) not null,
        `total_jobs` int not null,
        `pending_jobs` int not null,
        `failed_jobs` int not null,
        `failed_job_ids` longtext not null,
        `options` mediumtext null,
        `cancelled_at` int null,
        `created_at` int not null,
        `finished_at` int null,
        primary key (`id`)
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
create table
    `failed_jobs` (
        `id` bigint unsigned not null auto_increment primary key,
        `uuid` varchar(255) not null,
        `connection` text not null,
        `queue` text not null,
        `payload` longtext not null,
        `exception` longtext not null,
        `failed_at` timestamp not null default CURRENT_TIMESTAMP
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
alter table `failed_jobs` add unique `failed_jobs_uuid_unique` (`uuid`)
create table
    `personal_access_tokens` (
        `id` bigint unsigned not null auto_increment primary key,
        `tokenable_type` varchar(255) not null,
        `tokenable_id` bigint unsigned not null,
        `name` text not null,
        `token` varchar(64) not null,
        `abilities` text null,
        `last_used_at` timestamp null,
        `expires_at` timestamp null,
        `created_at` timestamp null,
        `updated_at` timestamp null
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
alter table `personal_access_tokens` add index `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`)
alter table `personal_access_tokens` add unique `personal_access_tokens_token_unique` (`token`)
alter table `personal_access_tokens` add index `personal_access_tokens_expires_at_index` (`expires_at`)
create table
    `visitors` (
        `id` bigint unsigned not null auto_increment primary key,
        `email` varchar(255) not null,
        `title` varchar(255) not null,
        `name` varchar(255) not null,
        `surname` varchar(255) not null,
        `zip_code` varchar(255) not null,
        `city` varchar(255) not null,
        `phone_number` varchar(255) not null,
        `source` varchar(255) not null,
        `notification` tinyint (1) not null,
        `extra_attributes` json null
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
create table
    `items` (
        `id` bigint unsigned not null auto_increment primary key,
        `weight` float (53) not null,
        `age` int not null,
        `name` varchar(255) not null,
        `is_electric` tinyint (1) not null,
        `brand` varchar(255) not null,
        `extra_attributes` json null,
        `visitor_id` bigint unsigned null
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
alter table `items` add constraint `items_visitor_id_foreign` foreign key (`visitor_id`) references `visitors` (`id`) on delete set null on update cascade
create table
    `events` (
        `date` varchar(255) not null,
        `city` varchar(255) not null,
        `zip_code` varchar(255) not null,
        `address` varchar(255) not null,
        `extra_attributes` json null,
        `created_at` timestamp null,
        `updated_at` timestamp null
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
create table
    `appointment` (
        `comment` varchar(255) not null,
        `appointment_date` datetime not null,
        `satisfaction_rating` int not null,
        `created_at` timestamp null,
        `updated_at` timestamp null,
        `item_id` bigint unsigned null,
        `event_id` bigint unsigned null,
        `extra_attributes` json null,
        primary key (`item_id`, `event_id`, `appointment_date`)
    ) default character
set
    utf8mb4 collate 'utf8mb4_unicode_ci'
alter table `appointment` add constraint `appointment_item_id_foreign` foreign key (`item_id`) references `items` (`id`) on delete set null on update cascade
alter table `appointment` add constraint `appointment_event_id_foreign` foreign key (`event_id`) references `events` (`id`) on delete set null on update cascade