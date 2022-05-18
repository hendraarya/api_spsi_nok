/*
 Navicat Premium Data Transfer

 Source Server         : Server Localhost Postgres
 Source Server Type    : PostgreSQL
 Source Server Version : 130001
 Source Host           : localhost:5432
 Source Catalog        : spsi_nok
 Source Schema         : spsi_nok

 Target Server Type    : PostgreSQL
 Target Server Version : 130001
 File Encoding         : 65001

 Date: 14/05/2022 16:30:31
*/


-- ----------------------------
-- Table structure for employee_spsi
-- ----------------------------
DROP TABLE IF EXISTS "spsi_nok"."employee_spsi";
CREATE TABLE "spsi_nok"."employee_spsi" (
  "employee_no" varchar(10) COLLATE "pg_catalog"."default" NOT NULL,
  "employee_name" varchar(50) COLLATE "pg_catalog"."default",
  "resign_date" date,
  "departement" varchar(30) COLLATE "pg_catalog"."default",
  "section" varchar(30) COLLATE "pg_catalog"."default",
  "gender" varchar(20) COLLATE "pg_catalog"."default",
  "join_date" date,
  "group_code" varchar(5) COLLATE "pg_catalog"."default",
  "employee_position" varchar(30) COLLATE "pg_catalog"."default",
  "shift" varchar(5) COLLATE "pg_catalog"."default",
  "created_at" timestamp(6) NOT NULL DEFAULT now(),
  "updated_at" timestamp(6) NOT NULL DEFAULT now()
)
;

-- ----------------------------
-- Records of employee_spsi
-- ----------------------------
INSERT INTO "spsi_nok"."employee_spsi" VALUES ('118208', 'Hendra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-14 08:55:18.825893', '2022-05-14 08:55:18.825893');

-- ----------------------------
-- Primary Key structure for table employee_spsi
-- ----------------------------
ALTER TABLE "spsi_nok"."employee_spsi" ADD CONSTRAINT "employee_spsi_pkey" PRIMARY KEY ("employee_no");
