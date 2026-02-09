create table
   `appointment` (
      `comment` varchar(255) not null,
      `appointment_date` datetime not null,
      `satisfaction_rating` int not null,
      `created_at` timestamp null,
      `updated_at` timestamp null,
      `item_id` bigint unsigned not null,
      `event_id` bigint unsigned not null,
      `extra_attributes` json null,
      primary key (`item_id`, `event_id`, `appointment_date`)
   ) default character
set
   utf8mb4 collate 'utf8mb4_unicode_ci'
alter table `appointment` add constraint `appointment_item_id_foreign` foreign key (`item_id`) references `items` (`id`)
alter table `appointment` add constraint `appointment_event_id_foreign` foreign key (`event_id`) references `events` (`id`)