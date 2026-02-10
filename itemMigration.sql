create table `items` (`id` bigint unsigned not null auto_increment primary key, `weight` float(53) not null, `age` int not null, `name` varchar(255) not null, `is_electric` tinyint(1) not null, `brand` varchar(255) not null, `extra_attributes` json null, `visitor_id` bigint unsigned null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
alter table `items` add constraint `items_visitor_id_foreign` foreign key (`visitor_id`) references `visitors` (`id`) on delete set null on update cascade  

create table `repair_events` (`date` varchar(255) not null, `city` varchar(255) not null, `zip_code` varchar(255) not null, `address` varchar(255) not null, `extra_attributes` json null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  

create table `appointment` (`comment` varchar(255) not null, `appointment_date` datetime not null, `satisfaction_rating` int not null, `created_at` timestamp null, `updated_at` timestamp null, `item_id` bigint unsigned not null, `repair_event_id` bigint unsigned not null, `extra_attributes` json null, primary key (`item_id`, `event_id`, `appointment_date`)) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
alter table `appointment` add constraint `appointment_item_id_foreign` foreign key (`item_id`) references `items` (`id`) on delete set null on update cascade  
alter table `appointment` add constraint `appointment_repair_event_id_foreign` foreign key (`repair_event_id`) references `repair_events` (`id`) on delete set null on update cascade  

