CREATE TABLE IF NOT EXISTS "migrations"(
  "id" integer primary key autoincrement not null,
  "migration" varchar not null,
  "batch" integer not null
);
CREATE TABLE IF NOT EXISTS "users"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "email" varchar not null,
  "email_verified_at" datetime,
  "password" varchar not null,
  "remember_token" varchar,
  "created_at" datetime,
  "updated_at" datetime,
  "profile_photo_path" varchar,
  "title" varchar,
  "is_admin" tinyint(1) not null default '0'
);
CREATE UNIQUE INDEX "users_email_unique" on "users"("email");
CREATE TABLE IF NOT EXISTS "password_reset_tokens"(
  "email" varchar not null,
  "token" varchar not null,
  "created_at" datetime,
  primary key("email")
);
CREATE TABLE IF NOT EXISTS "sessions"(
  "id" varchar not null,
  "user_id" integer,
  "ip_address" varchar,
  "user_agent" text,
  "payload" text not null,
  "last_activity" integer not null,
  primary key("id")
);
CREATE INDEX "sessions_user_id_index" on "sessions"("user_id");
CREATE INDEX "sessions_last_activity_index" on "sessions"("last_activity");
CREATE TABLE IF NOT EXISTS "cache"(
  "key" varchar not null,
  "value" text not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE TABLE IF NOT EXISTS "cache_locks"(
  "key" varchar not null,
  "owner" varchar not null,
  "expiration" integer not null,
  primary key("key")
);
CREATE TABLE IF NOT EXISTS "jobs"(
  "id" integer primary key autoincrement not null,
  "queue" varchar not null,
  "payload" text not null,
  "attempts" integer not null,
  "reserved_at" integer,
  "available_at" integer not null,
  "created_at" integer not null
);
CREATE INDEX "jobs_queue_index" on "jobs"("queue");
CREATE TABLE IF NOT EXISTS "job_batches"(
  "id" varchar not null,
  "name" varchar not null,
  "total_jobs" integer not null,
  "pending_jobs" integer not null,
  "failed_jobs" integer not null,
  "failed_job_ids" text not null,
  "options" text,
  "cancelled_at" integer,
  "created_at" integer not null,
  "finished_at" integer,
  primary key("id")
);
CREATE TABLE IF NOT EXISTS "failed_jobs"(
  "id" integer primary key autoincrement not null,
  "uuid" varchar not null,
  "connection" text not null,
  "queue" text not null,
  "payload" text not null,
  "exception" text not null,
  "failed_at" datetime not null default CURRENT_TIMESTAMP
);
CREATE UNIQUE INDEX "failed_jobs_uuid_unique" on "failed_jobs"("uuid");
CREATE TABLE IF NOT EXISTS "testimonials"(
  "id" integer primary key autoincrement not null,
  "author_name" varchar not null,
  "author_title" varchar not null,
  "quote" text not null,
  "author_avatar" varchar,
  "published" tinyint(1) not null default '0',
  "display_order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "article_ratings"(
  "id" integer primary key autoincrement not null,
  "article_id" integer not null,
  "rating" integer not null,
  "ip_address" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("article_id") references "articles"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "toolkit_categories"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "slug" varchar not null,
  "color_class" varchar,
  "description" text,
  "is_active" tinyint(1) not null default '1',
  "sort_order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "toolkit_categories_slug_unique" on "toolkit_categories"(
  "slug"
);
CREATE TABLE IF NOT EXISTS "toolkits"(
  "id" integer primary key autoincrement not null,
  "title" varchar not null,
  "slug" varchar not null,
  "description" text not null,
  "image_path" varchar,
  "link_url" varchar,
  "link_text" varchar not null default 'Learn More',
  "toolkit_category_id" integer not null,
  "tags" text,
  "is_featured" tinyint(1) not null default '0',
  "is_published" tinyint(1) not null default '1',
  "published_at" datetime,
  "sort_order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("toolkit_category_id") references "toolkit_categories"("id") on delete cascade
);
CREATE UNIQUE INDEX "toolkits_slug_unique" on "toolkits"("slug");
CREATE TABLE IF NOT EXISTS "clients"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "slug" varchar not null,
  "description" text,
  "logo" varchar,
  "website_url" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "clients_slug_unique" on "clients"("slug");
CREATE TABLE IF NOT EXISTS "projects"(
  "id" integer primary key autoincrement not null,
  "title" varchar not null,
  "slug" varchar not null,
  "excerpt" text,
  "content" text,
  "featured_image" varchar,
  "sector" varchar,
  "industry" varchar,
  "sdg_alignment" varchar,
  "client_id" integer,
  "created_at" datetime,
  "updated_at" datetime,
  "is_featured" tinyint(1) not null default '0',
  "published_at" datetime,
  "sector_id" integer,
  "industry_id" integer,
  "sdg_alignment_id" integer,
  foreign key("client_id") references "clients"("id") on delete set null
);
CREATE UNIQUE INDEX "projects_slug_unique" on "projects"("slug");
CREATE TABLE IF NOT EXISTS "team_members"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "slug" varchar not null,
  "title" varchar not null,
  "email" varchar,
  "linkedin" varchar,
  "summary" text not null,
  "professional_experience" text,
  "volunteer_experience" text,
  "education" text,
  "certifications" text,
  "skills" text,
  "press" text,
  "avatar" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "team_members_slug_unique" on "team_members"("slug");
CREATE TABLE IF NOT EXISTS "work_metrics"(
  "id" integer primary key autoincrement not null,
  "value" varchar not null,
  "title" varchar not null,
  "description" text not null,
  "color_class" varchar not null default 'text-chicken-comb-600',
  "display_order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "sectors"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "slug" varchar not null,
  "created_at" datetime,
  "updated_at" datetime,
  "hero_eyebrow" varchar,
  "hero_title" varchar,
  "hero_description" text,
  "hero_button_text" varchar,
  "challenge_eyebrow" varchar,
  "challenge_title" varchar,
  "challenge_description" text,
  "expertise_eyebrow" varchar,
  "expertise_title" varchar,
  "expertise_description" text,
  "expertise_items" text
);
CREATE UNIQUE INDEX "sectors_slug_unique" on "sectors"("slug");
CREATE TABLE IF NOT EXISTS "industries"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "slug" varchar not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "industries_slug_unique" on "industries"("slug");
CREATE TABLE IF NOT EXISTS "sdg_alignments"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "slug" varchar not null,
  "code" varchar,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "sdg_alignments_slug_unique" on "sdg_alignments"("slug");
CREATE TABLE IF NOT EXISTS "articles"(
  "id" integer primary key autoincrement not null,
  "title" varchar not null,
  "slug" varchar not null,
  "excerpt" text,
  "content" text not null,
  "image_path" varchar,
  "user_id" integer not null,
  "category_id" integer,
  "published_at" datetime,
  "status" varchar not null default 'draft',
  "meta_title" varchar,
  "meta_description" text,
  "reading_time" integer,
  "created_at" datetime,
  "updated_at" datetime,
  "is_featured" tinyint(1) not null default '0',
  foreign key("user_id") references "users"("id"),
  foreign key("category_id") references "categories"("id")
);
CREATE UNIQUE INDEX "articles_slug_unique" on "articles"("slug");
CREATE TABLE IF NOT EXISTS "categories"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "slug" varchar not null,
  "description" text,
  "created_at" datetime,
  "updated_at" datetime,
  "color_class" varchar
);
CREATE UNIQUE INDEX "categories_name_unique" on "categories"("name");
CREATE UNIQUE INDEX "categories_slug_unique" on "categories"("slug");
CREATE TABLE IF NOT EXISTS "about_sdgs"(
  "id" integer primary key autoincrement not null,
  "number" integer not null,
  "title" varchar not null,
  "description" text,
  "svg_path" varchar not null,
  "is_active" tinyint(1) not null default '1',
  "display_order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE UNIQUE INDEX "about_sdgs_number_unique" on "about_sdgs"("number");
CREATE TABLE IF NOT EXISTS "about_partners"(
  "id" integer primary key autoincrement not null,
  "name" varchar not null,
  "description" text,
  "logo_path" varchar not null,
  "website_url" varchar,
  "is_active" tinyint(1) not null default '1',
  "display_order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "service_deliverables"(
  "id" integer primary key autoincrement not null,
  "service_id" integer not null,
  "title" varchar not null,
  "description" text not null,
  "display_order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("service_id") references "services"("id") on delete cascade
);
CREATE TABLE IF NOT EXISTS "services"(
  "id" integer primary key autoincrement not null,
  "type" varchar not null,
  "title" varchar not null,
  "description" text not null,
  "content" text,
  "is_active" tinyint(1) not null default '1',
  "display_order" integer not null default '0',
  "created_at" datetime,
  "updated_at" datetime,
  "expertise_title" varchar,
  "expertise_description" text
);
CREATE UNIQUE INDEX "services_type_unique" on "services"("type");
CREATE TABLE IF NOT EXISTS "service_sectors"(
  "id" integer primary key autoincrement not null,
  "type" varchar not null,
  "title" varchar not null,
  "description" text not null,
  "content" text,
  "challenges_content" text,
  "expertise_content" text,
  "is_active" tinyint(1) not null default('1'),
  "display_order" integer not null default('0'),
  "created_at" datetime,
  "updated_at" datetime,
  "hero_eyebrow" varchar,
  "hero_title" varchar,
  "hero_description" text,
  "hero_button_text" varchar,
  "challenge_eyebrow" varchar,
  "challenge_title" varchar,
  "challenge_description" text,
  "expertise_eyebrow" varchar,
  "expertise_title" varchar,
  "expertise_description" text,
  "expertise_items" text,
  "challenge_items" text
);
CREATE UNIQUE INDEX "service_sectors_type_unique" on "service_sectors"("type");

INSERT INTO migrations VALUES(1,'0001_01_01_000000_create_users_table',1);
INSERT INTO migrations VALUES(2,'0001_01_01_000001_create_cache_table',1);
INSERT INTO migrations VALUES(3,'0001_01_01_000002_create_jobs_table',1);
INSERT INTO migrations VALUES(4,'2024_03_19_create_testimonials_table',1);
INSERT INTO migrations VALUES(5,'2024_06_09_000000_create_article_ratings_table',1);
INSERT INTO migrations VALUES(6,'2025_01_22_120000_create_toolkit_categories_table',1);
INSERT INTO migrations VALUES(7,'2025_01_22_120100_create_toolkits_table',1);
INSERT INTO migrations VALUES(8,'2025_04_24_233343_create_clients_table',1);
INSERT INTO migrations VALUES(9,'2025_04_24_233807_create_projects_table',1);
INSERT INTO migrations VALUES(10,'2025_04_25_073019_add_is_featured_to_projects_table',1);
INSERT INTO migrations VALUES(11,'2025_04_25_073210_add_published_at_to_projects_table',1);
INSERT INTO migrations VALUES(12,'2025_04_27_152251_create_team_members_table',1);
INSERT INTO migrations VALUES(13,'2025_04_29_182147_create_work_metrics_table',1);
INSERT INTO migrations VALUES(14,'2025_04_30_201558_update_testimonials_published_status',1);
INSERT INTO migrations VALUES(15,'2025_04_30_211213_create_sectors_table',1);
INSERT INTO migrations VALUES(16,'2025_04_30_211235_create_industries_table',1);
INSERT INTO migrations VALUES(17,'2025_04_30_211250_create_sdg_alignments_table',1);
INSERT INTO migrations VALUES(18,'2025_04_30_211305_add_relations_to_projects_table',1);
INSERT INTO migrations VALUES(19,'2025_05_16_155152_create_articles_table',1);
INSERT INTO migrations VALUES(20,'2025_05_16_155231_create_categories_table',1);
INSERT INTO migrations VALUES(21,'2025_05_16_185926_add_color_class_to_categories_table',1);
INSERT INTO migrations VALUES(22,'2025_05_16_212028_add_author_fields_to_users_table',1);
INSERT INTO migrations VALUES(23,'2025_05_17_141531_add_is_featured_to_articles_table',1);
INSERT INTO migrations VALUES(24,'2025_05_24_221210_create_about_sdgs_table',1);
INSERT INTO migrations VALUES(25,'2025_05_24_224656_create_about_partners_table',1);
INSERT INTO migrations VALUES(26,'2025_05_26_201041_create_service_deliverables_table',1);
INSERT INTO migrations VALUES(27,'2025_05_26_201041_create_service_sectors_table',1);
INSERT INTO migrations VALUES(28,'2025_05_26_201041_create_services_table',1);
INSERT INTO migrations VALUES(29,'2025_05_26_203916_add_expertise_fields_to_services_table',1);
INSERT INTO migrations VALUES(30,'2025_05_26_204246_add_content_fields_to_sectors_table',1);
INSERT INTO migrations VALUES(31,'2025_05_26_205227_add_content_fields_to_service_sectors_table',1);
INSERT INTO migrations VALUES(32,'2025_05_26_212058_fix_expertise_items_column_type_in_service_sectors_table',1);
INSERT INTO migrations VALUES(33,'2025_05_26_214257_add_challenge_items_to_service_sectors_table',1);
