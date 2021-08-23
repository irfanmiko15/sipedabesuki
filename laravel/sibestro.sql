/*
PostgreSQL Backup
Database: sibestro/public
Backup Time: 2021-06-29 20:55:47
*/

DROP SEQUENCE IF EXISTS "public"."failed_jobs_id_seq";
DROP SEQUENCE IF EXISTS "public"."migrations_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_bansos_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_berkas_admin_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_bukti_pelajar_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_data_orang_tua_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_data_rumah_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_form_pendaftaran_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_foto_diri_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_foto_rumah_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_identitas_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_ijazah_skhu_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_jurusan_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_nilai_akhir_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_nilai_rapor_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_pendidikan_s1_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_penghasilan_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_piagam_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_prestasi_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_rapor_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_riwayat_pendidikan_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_saudara_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_sekolah_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_sktm_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_surat_pernyataan_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_tagihan_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_tanggungan_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_ukt_id_seq";
DROP SEQUENCE IF EXISTS "public"."tb_wawancara_id_seq";
DROP SEQUENCE IF EXISTS "public"."users_id_seq";
DROP TABLE IF EXISTS "public"."failed_jobs";
DROP TABLE IF EXISTS "public"."migrations";
DROP TABLE IF EXISTS "public"."password_resets";
DROP TABLE IF EXISTS "public"."tb_bansos";
DROP TABLE IF EXISTS "public"."tb_berkas_admin";
DROP TABLE IF EXISTS "public"."tb_bukti_pelajar";
DROP TABLE IF EXISTS "public"."tb_data_orang_tua";
DROP TABLE IF EXISTS "public"."tb_data_rumah";
DROP TABLE IF EXISTS "public"."tb_form_pendaftaran";
DROP TABLE IF EXISTS "public"."tb_foto_diri";
DROP TABLE IF EXISTS "public"."tb_foto_rumah";
DROP TABLE IF EXISTS "public"."tb_identitas";
DROP TABLE IF EXISTS "public"."tb_ijazah_skhu";
DROP TABLE IF EXISTS "public"."tb_jurusan";
DROP TABLE IF EXISTS "public"."tb_nilai_akhir";
DROP TABLE IF EXISTS "public"."tb_nilai_rapor";
DROP TABLE IF EXISTS "public"."tb_pendidikan_s1";
DROP TABLE IF EXISTS "public"."tb_penghasilan";
DROP TABLE IF EXISTS "public"."tb_piagam";
DROP TABLE IF EXISTS "public"."tb_prestasi";
DROP TABLE IF EXISTS "public"."tb_rapor";
DROP TABLE IF EXISTS "public"."tb_riwayat_pendidikan";
DROP TABLE IF EXISTS "public"."tb_saudara";
DROP TABLE IF EXISTS "public"."tb_sekolah";
DROP TABLE IF EXISTS "public"."tb_sktm";
DROP TABLE IF EXISTS "public"."tb_surat_pernyataan";
DROP TABLE IF EXISTS "public"."tb_tagihan";
DROP TABLE IF EXISTS "public"."tb_tanggungan";
DROP TABLE IF EXISTS "public"."tb_ukt";
DROP TABLE IF EXISTS "public"."tb_wawancara";
DROP TABLE IF EXISTS "public"."users";
CREATE SEQUENCE "failed_jobs_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "migrations_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;
CREATE SEQUENCE "tb_bansos_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_berkas_admin_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_bukti_pelajar_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_data_orang_tua_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_data_rumah_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_form_pendaftaran_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_foto_diri_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_foto_rumah_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_identitas_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_ijazah_skhu_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_jurusan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_nilai_akhir_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_nilai_rapor_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_pendidikan_s1_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_penghasilan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_piagam_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_prestasi_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_rapor_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_riwayat_pendidikan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_saudara_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_sekolah_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_sktm_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_surat_pernyataan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_tagihan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_tanggungan_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_ukt_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "tb_wawancara_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE SEQUENCE "users_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;
CREATE TABLE "failed_jobs" (
  "id" int8 NOT NULL DEFAULT nextval('failed_jobs_id_seq'::regclass),
  "connection" text COLLATE "pg_catalog"."default" NOT NULL,
  "queue" text COLLATE "pg_catalog"."default" NOT NULL,
  "payload" text COLLATE "pg_catalog"."default" NOT NULL,
  "exception" text COLLATE "pg_catalog"."default" NOT NULL,
  "failed_at" timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP
)
;
ALTER TABLE "failed_jobs" OWNER TO "postgres";
CREATE TABLE "migrations" (
  "id" int4 NOT NULL DEFAULT nextval('migrations_id_seq'::regclass),
  "migration" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "batch" int4 NOT NULL
)
;
ALTER TABLE "migrations" OWNER TO "postgres";
CREATE TABLE "password_resets" (
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "token" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0)
)
;
ALTER TABLE "password_resets" OWNER TO "postgres";
CREATE TABLE "tb_bansos" (
  "id" int8 NOT NULL DEFAULT nextval('tb_bansos_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "jenis" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_bansos" OWNER TO "postgres";
CREATE TABLE "tb_berkas_admin" (
  "id" int8 NOT NULL DEFAULT nextval('tb_berkas_admin_id_seq'::regclass),
  "jenis" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "jenjang" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_berkas_admin" OWNER TO "postgres";
CREATE TABLE "tb_bukti_pelajar" (
  "id" int8 NOT NULL DEFAULT nextval('tb_bukti_pelajar_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_bukti_pelajar" OWNER TO "postgres";
CREATE TABLE "tb_data_orang_tua" (
  "id" int8 NOT NULL DEFAULT nextval('tb_data_orang_tua_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "jenis" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tempat_lahir" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tanggal_lahir" date NOT NULL,
  "no_telp" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "pekerjaan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "alamat" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "penghasilan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_data_orang_tua" OWNER TO "postgres";
CREATE TABLE "tb_data_rumah" (
  "id" int8 NOT NULL DEFAULT nextval('tb_data_rumah_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "kepemilikan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "luas_bangunan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "luas_tanah" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "jumlah_orang" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "sumber_air" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "sumber_listrik" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "value_listrik" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "transportasi_harian" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "value_transportasi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "lama_menetap" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_data_rumah" OWNER TO "postgres";
CREATE TABLE "tb_form_pendaftaran" (
  "id" int8 NOT NULL DEFAULT nextval('tb_form_pendaftaran_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_form_pendaftaran" OWNER TO "postgres";
CREATE TABLE "tb_foto_diri" (
  "id" int8 NOT NULL DEFAULT nextval('tb_foto_diri_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_foto_diri" OWNER TO "postgres";
CREATE TABLE "tb_foto_rumah" (
  "id" int8 NOT NULL DEFAULT nextval('tb_foto_rumah_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "jenis" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_foto_rumah" OWNER TO "postgres";
CREATE TABLE "tb_identitas" (
  "id" int8 NOT NULL DEFAULT nextval('tb_identitas_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_identitas" OWNER TO "postgres";
CREATE TABLE "tb_ijazah_skhu" (
  "id" int8 NOT NULL DEFAULT nextval('tb_ijazah_skhu_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "jenis" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_ijazah_skhu" OWNER TO "postgres";
CREATE TABLE "tb_jurusan" (
  "id" int8 NOT NULL DEFAULT nextval('tb_jurusan_id_seq'::regclass),
  "nama_jurusan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_jurusan" OWNER TO "postgres";
CREATE TABLE "tb_nilai_akhir" (
  "id" int8 NOT NULL DEFAULT nextval('tb_nilai_akhir_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "PA1" varchar(255) COLLATE "pg_catalog"."default",
  "PA2" varchar(255) COLLATE "pg_catalog"."default",
  "PA3" varchar(255) COLLATE "pg_catalog"."default",
  "PA4" varchar(255) COLLATE "pg_catalog"."default",
  "TT1" varchar(255) COLLATE "pg_catalog"."default",
  "KK1" varchar(255) COLLATE "pg_catalog"."default",
  "KK2" varchar(255) COLLATE "pg_catalog"."default",
  "KK3" varchar(255) COLLATE "pg_catalog"."default",
  "KK4" varchar(255) COLLATE "pg_catalog"."default",
  "KK5" varchar(255) COLLATE "pg_catalog"."default",
  "KK6" varchar(255) COLLATE "pg_catalog"."default",
  "total_PA" varchar(255) COLLATE "pg_catalog"."default",
  "total_TT" varchar(255) COLLATE "pg_catalog"."default",
  "total_KK" varchar(255) COLLATE "pg_catalog"."default",
  "total_nilai" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_nilai_akhir" OWNER TO "postgres";
CREATE TABLE "tb_nilai_rapor" (
  "id" int8 NOT NULL DEFAULT nextval('tb_nilai_rapor_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "kelas" varchar(255) COLLATE "pg_catalog"."default",
  "semester" varchar(255) COLLATE "pg_catalog"."default",
  "nilai" varchar(255) COLLATE "pg_catalog"."default",
  "jenis" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "peringkat" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_nilai_rapor" OWNER TO "postgres";
CREATE TABLE "tb_pendidikan_s1" (
  "id" int8 NOT NULL DEFAULT nextval('tb_pendidikan_s1_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "universitas" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "fakultas" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "id_jurusan" int8 NOT NULL,
  "penerimaan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_pendidikan_s1" OWNER TO "postgres";
CREATE TABLE "tb_penghasilan" (
  "id" int8 NOT NULL DEFAULT nextval('tb_penghasilan_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_penghasilan" OWNER TO "postgres";
CREATE TABLE "tb_piagam" (
  "id" int8 NOT NULL DEFAULT nextval('tb_piagam_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_piagam" OWNER TO "postgres";
CREATE TABLE "tb_prestasi" (
  "id" int8 NOT NULL DEFAULT nextval('tb_prestasi_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "prestasi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tingkat" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tahun" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_prestasi" OWNER TO "postgres";
CREATE TABLE "tb_rapor" (
  "id" int8 NOT NULL DEFAULT nextval('tb_rapor_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_rapor" OWNER TO "postgres";
CREATE TABLE "tb_riwayat_pendidikan" (
  "id" int8 NOT NULL DEFAULT nextval('tb_riwayat_pendidikan_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "jenjang" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_sekolah" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "lokasi" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tahun_lulus" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_riwayat_pendidikan" OWNER TO "postgres";
CREATE TABLE "tb_saudara" (
  "id" int8 NOT NULL DEFAULT nextval('tb_saudara_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "anak_ke" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_saudara" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "umur" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "pendidikan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "pekerjaan" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_saudara" OWNER TO "postgres";
CREATE TABLE "tb_sekolah" (
  "id" int8 NOT NULL DEFAULT nextval('tb_sekolah_id_seq'::regclass),
  "nama_sekolah" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "alamat" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "no_telp" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_sekolah" OWNER TO "postgres";
CREATE TABLE "tb_sktm" (
  "id" int8 NOT NULL DEFAULT nextval('tb_sktm_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_sktm" OWNER TO "postgres";
CREATE TABLE "tb_surat_pernyataan" (
  "id" int8 NOT NULL DEFAULT nextval('tb_surat_pernyataan_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_surat_pernyataan" OWNER TO "postgres";
CREATE TABLE "tb_tagihan" (
  "id" int8 NOT NULL DEFAULT nextval('tb_tagihan_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "jenis" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_tagihan" OWNER TO "postgres";
CREATE TABLE "tb_tanggungan" (
  "id" int8 NOT NULL DEFAULT nextval('tb_tanggungan_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "jumlah" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_tanggungan" OWNER TO "postgres";
CREATE TABLE "tb_ukt" (
  "id" int8 NOT NULL DEFAULT nextval('tb_ukt_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "nama_file" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_ukt" OWNER TO "postgres";
CREATE TABLE "tb_wawancara" (
  "id" int8 NOT NULL DEFAULT nextval('tb_wawancara_id_seq'::regclass),
  "id_user" int8 NOT NULL,
  "tanggal_wawancara" timestamp(0) NOT NULL,
  "jam_wawancara" time(0) NOT NULL,
  "PIC" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;
ALTER TABLE "tb_wawancara" OWNER TO "postgres";
CREATE TABLE "users" (
  "id" int8 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "jenis_kelamin" varchar(255) COLLATE "pg_catalog"."default",
  "tempat_lahir" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_lahir" date,
  "agama" varchar(255) COLLATE "pg_catalog"."default",
  "alamat_kk" varchar(255) COLLATE "pg_catalog"."default",
  "no_telp" varchar(255) COLLATE "pg_catalog"."default",
  "asal_sekolah" int8,
  "alamat_user" varchar(255) COLLATE "pg_catalog"."default",
  "role" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tahun_penerimaan" varchar(255) COLLATE "pg_catalog"."default",
  "seleksi_berkas" varchar(255) COLLATE "pg_catalog"."default",
  "seleksi_akhir" varchar(255) COLLATE "pg_catalog"."default",
  "status_user" varchar(255) COLLATE "pg_catalog"."default",
  "tanggal_wawancara" date,
  "jam_wawancara" time(0),
  "pic_wawancara" varchar(255) COLLATE "pg_catalog"."default",
  "email_verified_at" timestamp(0),
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "remember_token" varchar(100) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "status_daftar" varchar(255) COLLATE "pg_catalog"."default"
)
;
ALTER TABLE "users" OWNER TO "postgres";
BEGIN;
LOCK TABLE "public"."failed_jobs" IN SHARE MODE;
DELETE FROM "public"."failed_jobs";
COMMIT;
BEGIN;
LOCK TABLE "public"."migrations" IN SHARE MODE;
DELETE FROM "public"."migrations";
INSERT INTO "public"."migrations" ("id","migration","batch") VALUES (295, '2010_04_23_000157_create_tb_sekolah_table', 1),(296, '2010_05_21_022631_create_tb_jurusan_table', 1),(297, '2014_10_12_000000_create_users_table', 1),(298, '2014_10_12_100000_create_password_resets_table', 1),(299, '2019_08_19_000000_create_failed_jobs_table', 1),(300, '2021_04_21_011932_create_tb_ukt_table', 1),(301, '2021_04_21_011955_create_tb_tagihan_table', 1),(302, '2021_04_21_012033_create_tb_surat_pernyataan_table', 1),(303, '2021_04_21_012054_create_tb_sktm_table', 1),(304, '2021_04_21_012120_create_tb_rapor_table', 1),(305, '2021_04_21_012151_create_tb_piagam_table', 1),(306, '2021_04_21_012209_create_tb_penghasilan_table', 1),(307, '2021_04_21_012230_create_tb_ijazah_skhu_table', 1),(308, '2021_04_21_012254_create_tb_identitas_table', 1),(309, '2021_04_21_012337_create_tb_foto_rumah_table', 1),(310, '2021_04_21_012403_create_tb_form_pendaftaran_table', 1),(311, '2021_04_21_012430_create_tb_bukti_pelajar_table', 1),(312, '2021_04_21_012446_create_tb_bansos_table', 1),(313, '2021_04_21_012516_create_tb_berkas_admin_table', 1),(314, '2021_05_06_063018_create_tb_data_orang_tua', 1),(315, '2021_05_07_012455_create_tb_saudara', 1),(316, '2021_05_07_012631_create_tb_tanggungan', 1),(317, '2021_05_07_064339_create_tb_prestasi', 1),(318, '2021_05_07_065329_create_tb_nilai_rapor', 1),(319, '2021_05_10_062450_create_tb_riwayat_pendidikan_table', 1),(320, '2021_05_11_010625_create_tb_pendidikan_s1_table', 1),(321, '2021_05_19_071225_create_tb_data_rumah_table', 1),(322, '2021_05_21_014203_create_tb_foto_diri_table', 1),(323, '2021_05_26_180359_create_tb_nilai_akhir_table', 1),(324, '2021_05_28_003105_create_tb_wawancara_table', 1);
COMMIT;
BEGIN;
LOCK TABLE "public"."password_resets" IN SHARE MODE;
DELETE FROM "public"."password_resets";
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_bansos" IN SHARE MODE;
DELETE FROM "public"."tb_bansos";
INSERT INTO "public"."tb_bansos" ("id","id_user","jenis","nama_file","created_at","updated_at") VALUES (1, 23, 'Kartu Indonesia Sehat', '1466936067.pdf', '2021-06-21 07:53:35', '2021-06-21 07:53:35');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_berkas_admin" IN SHARE MODE;
DELETE FROM "public"."tb_berkas_admin";
INSERT INTO "public"."tb_berkas_admin" ("id","jenis","jenjang","nama_file","created_at","updated_at") VALUES (1, 'bayar gaji', 'SMA', '843138658.pdf', '2021-06-16 00:13:48', '2021-06-16 00:13:48'),(2, 'A', 'SMA', '2056638210.pdf', '2021-06-18 02:55:37', '2021-06-18 02:55:37');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_bukti_pelajar" IN SHARE MODE;
DELETE FROM "public"."tb_bukti_pelajar";
INSERT INTO "public"."tb_bukti_pelajar" ("id","id_user","nama_file","created_at","updated_at") VALUES (3, 22, '1627417532.jpeg', '2021-06-21 07:31:46', '2021-06-21 07:31:46'),(4, 23, '351389691.PNG', '2021-06-21 07:50:06', '2021-06-21 07:50:06');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_data_orang_tua" IN SHARE MODE;
DELETE FROM "public"."tb_data_orang_tua";
INSERT INTO "public"."tb_data_orang_tua" ("id","id_user","nama","jenis","tempat_lahir","tanggal_lahir","no_telp","pekerjaan","alamat","penghasilan","created_at","updated_at") VALUES (2, 22, 'Bapak', 'Ayah', 'Jombang', '2000-06-05', '80877', 'Pedagang', 'f', '5000000', '2021-06-21 07:28:17', '2021-06-21 07:28:17'),(4, 6, 'sadijdsai', 'Ibu', 'TULUNGAGUNG', '2021-06-03', '081332893935', 'MAHASISWA', 'asddjsiajsdia', '3000000', '2021-06-22 06:38:48', '2021-06-22 06:38:48');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_data_rumah" IN SHARE MODE;
DELETE FROM "public"."tb_data_rumah";
INSERT INTO "public"."tb_data_rumah" ("id","id_user","kepemilikan","luas_bangunan","luas_tanah","jumlah_orang","sumber_air","sumber_listrik","value_listrik","transportasi_harian","value_transportasi","lama_menetap","created_at","updated_at") VALUES (5, 6, 'Sendiri', '>200', '>200', '1', 'PDAM', 'Tidak Ada', '', 'Sepeda', '', '1', '2021-06-22 06:46:53', '2021-06-22 06:46:53');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_form_pendaftaran" IN SHARE MODE;
DELETE FROM "public"."tb_form_pendaftaran";
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_foto_diri" IN SHARE MODE;
DELETE FROM "public"."tb_foto_diri";
INSERT INTO "public"."tb_foto_diri" ("id","id_user","nama_file","created_at","updated_at") VALUES (2, 23, '369817221.PNG', '2021-06-21 07:52:23', '2021-06-21 07:52:23');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_foto_rumah" IN SHARE MODE;
DELETE FROM "public"."tb_foto_rumah";
INSERT INTO "public"."tb_foto_rumah" ("id","id_user","jenis","nama_file","created_at","updated_at") VALUES (1, 23, 'Ruang Tamu', '80418985.PNG', '2021-06-21 07:51:01', '2021-06-21 07:51:01'),(2, 23, 'Kamar Pribadi', '875181689.PNG', '2021-06-21 07:51:20', '2021-06-21 07:51:20'),(3, 23, 'Ruang Tamu', '1002031486.jpeg', '2021-06-21 07:51:42', '2021-06-21 07:51:42');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_identitas" IN SHARE MODE;
DELETE FROM "public"."tb_identitas";
INSERT INTO "public"."tb_identitas" ("id","id_user","nama_file","created_at","updated_at") VALUES (1, 23, '412635087.pdf', '2021-06-21 07:50:38', '2021-06-21 07:50:38');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_ijazah_skhu" IN SHARE MODE;
DELETE FROM "public"."tb_ijazah_skhu";
INSERT INTO "public"."tb_ijazah_skhu" ("id","id_user","jenis","nama_file","created_at","updated_at") VALUES (1, 23, 'Ijazah', '33503536.pdf', '2021-06-21 07:54:01', '2021-06-21 07:54:01');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_jurusan" IN SHARE MODE;
DELETE FROM "public"."tb_jurusan";
INSERT INTO "public"."tb_jurusan" ("id","nama_jurusan","created_at","updated_at") VALUES (1, 'Sistem Informasi', '2021-06-10 02:14:20', '2021-06-10 02:14:20'),(6, 'Teknik Informatika', '2021-06-21 06:59:33', '2021-06-21 06:59:33'),(7, 'Teknik Sipil', '2021-06-21 06:59:40', '2021-06-21 06:59:40'),(8, 'Matematika', '2021-06-21 06:59:45', '2021-06-21 06:59:45');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_nilai_akhir" IN SHARE MODE;
DELETE FROM "public"."tb_nilai_akhir";
INSERT INTO "public"."tb_nilai_akhir" ("id","id_user","PA1","PA2","PA3","PA4","TT1","KK1","KK2","KK3","KK4","KK5","KK6","total_PA","total_TT","total_KK","total_nilai","created_at","updated_at") VALUES (4, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-10 07:20:15', '2021-06-10 07:20:15'),(12, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:02:00', '2021-06-21 07:02:00'),(14, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:02:50', '2021-06-21 07:02:50'),(15, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:03:11', '2021-06-21 07:03:11'),(16, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:03:34', '2021-06-21 07:03:34'),(17, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:04:00', '2021-06-21 07:04:00'),(18, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:04:35', '2021-06-21 07:04:35'),(19, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:04:52', '2021-06-21 07:04:52'),(20, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:05:12', '2021-06-21 07:05:12'),(21, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-21 07:05:38', '2021-06-21 07:05:38'),(13, 17, '20', '10', '5', '5', '30', '10', '5', '5', '5', '3', '2', '40', '30', '30', '100', '2021-06-21 07:02:21', '2021-06-21 07:02:21'),(22, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-22 14:36:25', '2021-06-22 14:36:25'),(23, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-22 15:18:30', '2021-06-22 15:18:30'),(24, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-22 17:08:55', '2021-06-22 17:08:55'),(25, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-22 17:09:11', '2021-06-22 17:09:11'),(26, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-22 17:09:30', '2021-06-22 17:09:30'),(27, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-24 00:29:19', '2021-06-24 00:29:19'),(28, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-24 01:10:02', '2021-06-24 01:10:02');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_nilai_rapor" IN SHARE MODE;
DELETE FROM "public"."tb_nilai_rapor";
INSERT INTO "public"."tb_nilai_rapor" ("id","id_user","kelas","semester","nilai","jenis","peringkat","created_at","updated_at") VALUES (2, 22, '10', '1', '80', 'rapor', '3', '2021-06-21 07:30:12', '2021-06-21 07:30:12'),(3, 22, '11', '2', '90', 'rapor', '3', '2021-06-21 07:30:29', '2021-06-21 07:30:29'),(9, 6, '7', '1', '90', 'rapor', NULL, '2021-06-22 06:31:55', '2021-06-22 06:31:55'),(10, 6, NULL, NULL, '90', 'un', NULL, '2021-06-22 06:32:02', '2021-06-22 06:32:02'),(11, 6, NULL, NULL, '90', 'us', NULL, '2021-06-22 06:32:07', '2021-06-22 06:32:07');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_pendidikan_s1" IN SHARE MODE;
DELETE FROM "public"."tb_pendidikan_s1";
INSERT INTO "public"."tb_pendidikan_s1" ("id","id_user","universitas","fakultas","id_jurusan","penerimaan","created_at","updated_at") VALUES (1, 22, 'PENS', 'Teknik Informatika', 6, 'SBMPTN', '2021-06-21 07:09:33', '2021-06-21 07:09:33');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_penghasilan" IN SHARE MODE;
DELETE FROM "public"."tb_penghasilan";
INSERT INTO "public"."tb_penghasilan" ("id","id_user","nama_file","created_at","updated_at") VALUES (1, 23, '250679346.pdf', '2021-06-21 07:54:18', '2021-06-21 07:54:18');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_piagam" IN SHARE MODE;
DELETE FROM "public"."tb_piagam";
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_prestasi" IN SHARE MODE;
DELETE FROM "public"."tb_prestasi";
INSERT INTO "public"."tb_prestasi" ("id","id_user","prestasi","tingkat","tahun","nama_file","created_at","updated_at") VALUES (2, 22, 'A', 'Internasional', '2010', '637320159.jpeg', '2021-06-21 07:09:50', '2021-06-21 07:09:50');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_rapor" IN SHARE MODE;
DELETE FROM "public"."tb_rapor";
INSERT INTO "public"."tb_rapor" ("id","id_user","nama_file","created_at","updated_at") VALUES (2, 23, '1323979669.pdf', '2021-06-21 07:55:08', '2021-06-21 07:55:08'),(3, 6, '1791464329.pdf', '2021-06-22 07:26:39', '2021-06-22 07:26:39'),(4, 26, '45194234.pdf', '2021-06-22 15:08:25', '2021-06-22 15:08:25');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_riwayat_pendidikan" IN SHARE MODE;
DELETE FROM "public"."tb_riwayat_pendidikan";
INSERT INTO "public"."tb_riwayat_pendidikan" ("id","id_user","jenjang","nama_sekolah","lokasi","tahun_lulus","created_at","updated_at") VALUES (2, 22, 'SD/MI', 'SD', 'Jombang', '2010', '2021-06-21 07:08:28', '2021-06-21 07:08:28'),(3, 22, 'SMP/MTs', 'SMP', 'Jombang', '2016', '2021-06-21 07:08:43', '2021-06-21 07:08:43'),(4, 22, 'SMA/SMK/MA', 'SMA', 'Jombang', '2017', '2021-06-21 07:09:08', '2021-06-21 07:09:08');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_saudara" IN SHARE MODE;
DELETE FROM "public"."tb_saudara";
INSERT INTO "public"."tb_saudara" ("id","id_user","anak_ke","nama_saudara","umur","pendidikan","pekerjaan","created_at","updated_at") VALUES (1, 22, '2', 'f', '4', 'SMP', 'p', '2021-06-21 07:29:04', '2021-06-21 07:29:04'),(2, 23, '5', 'y', '4', 'SMP', 'r', '2021-06-21 07:49:28', '2021-06-21 07:49:28');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_sekolah" IN SHARE MODE;
DELETE FROM "public"."tb_sekolah";
INSERT INTO "public"."tb_sekolah" ("id","nama_sekolah","alamat","no_telp","created_at","updated_at") VALUES (1, 'SMA N 1 Cerme', 'DSN BEBEKAN RT 1 RW 2 BALEREJO KAUMAN TULUNGAGUNG', '081332893935', '2021-06-10 02:14:14', '2021-06-10 02:14:14'),(6, 'SMA N 8 Gresik', 'Gresik', '1', '2021-06-21 07:00:04', '2021-06-21 07:00:04'),(7, 'SMA N 1 Gresik', 'Gresik', '2', '2021-06-21 07:00:20', '2021-06-21 07:00:20'),(8, 'SMA N 7 Gresik', 'Gresik', '3', '2021-06-21 07:00:44', '2021-06-21 07:00:44'),(9, 'PENS', 'Surabaya', '5', '2021-06-21 07:00:57', '2021-06-21 07:00:57'),(10, 'ITS', 'Surabaya', '7', '2021-06-21 07:01:09', '2021-06-21 07:01:09'),(11, 'Unair', 'Surabaya', '8', '2021-06-21 07:01:19', '2021-06-21 07:01:19');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_sktm" IN SHARE MODE;
DELETE FROM "public"."tb_sktm";
INSERT INTO "public"."tb_sktm" ("id","id_user","nama_file","created_at","updated_at") VALUES (1, 23, '16128124.pdf', '2021-06-21 07:52:37', '2021-06-21 07:52:37');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_surat_pernyataan" IN SHARE MODE;
DELETE FROM "public"."tb_surat_pernyataan";
INSERT INTO "public"."tb_surat_pernyataan" ("id","id_user","nama_file","created_at","updated_at") VALUES (1, 23, '1018425519.pdf', '2021-06-21 07:55:54', '2021-06-21 07:55:54'),(2, 6, '1390009387.pdf', '2021-06-22 07:26:13', '2021-06-22 07:26:13'),(3, 26, '1829828761.pdf', '2021-06-22 15:08:09', '2021-06-22 15:08:09');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_tagihan" IN SHARE MODE;
DELETE FROM "public"."tb_tagihan";
INSERT INTO "public"."tb_tagihan" ("id","id_user","jenis","nama_file","created_at","updated_at") VALUES (1, 23, 'Tagihan Listrik', '1535850899.pdf', '2021-06-21 07:53:09', '2021-06-21 07:53:09');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_tanggungan" IN SHARE MODE;
DELETE FROM "public"."tb_tanggungan";
INSERT INTO "public"."tb_tanggungan" ("id","id_user","jumlah","created_at","updated_at") VALUES (1, 22, '3', '2021-06-21 07:28:38', '2021-06-21 07:28:38'),(2, 23, '4', '2021-06-21 07:49:35', '2021-06-21 07:49:35');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_ukt" IN SHARE MODE;
DELETE FROM "public"."tb_ukt";
INSERT INTO "public"."tb_ukt" ("id","id_user","nama_file","created_at","updated_at") VALUES (1, 23, '610403032.pdf', '2021-06-21 07:50:22', '2021-06-21 07:50:22');
COMMIT;
BEGIN;
LOCK TABLE "public"."tb_wawancara" IN SHARE MODE;
DELETE FROM "public"."tb_wawancara";
COMMIT;
BEGIN;
LOCK TABLE "public"."users" IN SHARE MODE;
DELETE FROM "public"."users";
INSERT INTO "public"."users" ("id","name","email","jenis_kelamin","tempat_lahir","tanggal_lahir","agama","alamat_kk","no_telp","asal_sekolah","alamat_user","role","tahun_penerimaan","seleksi_berkas","seleksi_akhir","status_user","tanggal_wawancara","jam_wawancara","pic_wawancara","email_verified_at","password","remember_token","created_at","updated_at","status_daftar") VALUES (27, 'EE', 'EE@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 'S1', '2021', 'Lolos', 'Tidak Lolos', 'nonaktif', NULL, NULL, NULL, NULL, '$2y$10$DBS8WsxLbepZqz7QT7XRseRjdtcnyP9umtnXQN/gCrGvFf8j7QJoK', NULL, '2021-06-22 15:18:30', '2021-06-22 15:18:30', 'Belum Terdaftar'),(16, 'A', 'a@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$MB6zIaY9pKxgeU/h7nZEmOixG6kuCGsSqRNI/xX4yo6NXr3XcmedW', NULL, '2021-06-21 07:02:00', '2021-06-21 07:02:00', 'Belum Terdaftar'),(17, 'B', 'B@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$eWhn2qxvCSQqCjAbF16w..QJnlUWu4uj4NYQBjmpQ1UJtC1wGZBEa', NULL, '2021-06-21 07:02:21', '2021-06-21 07:02:21', 'Belum Terdaftar'),(18, 'C', 'c@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$MPSv1iuKSg/eqRsWt.n2t.gd2wqZnR6d5YahuD2IBQLuSufp3D9dG', NULL, '2021-06-21 07:02:50', '2021-06-21 07:02:50', 'Belum Terdaftar'),(19, 'D', 'd@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$Nk4fot2yLNOFvkIMbjP.E.wsooHDPTu1H4194V4oJowh2YZuggD5q', NULL, '2021-06-21 07:03:11', '2021-06-21 07:03:11', 'Belum Terdaftar'),(20, 'E', 'e@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$rRpQzXEFX6d87vu9E4kqJ.jIpQPE2BX8Pv3iB2wzr3Xs9j45T2Px.', NULL, '2021-06-21 07:03:34', '2021-06-21 07:03:34', 'Belum Terdaftar'),(21, 'F', 'f@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$RkqHKLFsOzo2FUNXUwLrZOUYo0MAJdWT4gTnOxVM7ry3JOaUwQlS.', NULL, '2021-06-21 07:04:00', '2021-06-21 07:04:00', 'Belum Terdaftar'),(6, 'irfan dary sujatmiko', 'irfandarys@gmail.com', 'Laki-Laki', 'TULUNGAGUNG', '2021-06-04', 'Islam', 'okoasdkosadko', '081332893935', 1, 'asdokoaskdsao', 'SMA', '2021', 'Lolos', 'Tidak Lolos', 'aktif', '2021-06-03', '14:49:00', 'Rizal', NULL, '$2y$10$CYKbucQ8A5u4DkTmnEcvI.ARD4dxkNJYrronBHvp5LiYl8r1ezwRC', NULL, '2021-06-10 07:20:15', '2021-06-10 07:20:15', NULL),(22, 'AA', 'aa@mail.com', 'Laki-Laki', 'Jombang', '2021-06-22', 'Islam', 'Jombang', '1212454', 9, 'Jombang', 'S1', '2021', 'Tidak Lolos', 'Tidak Lolos', 'aktif', NULL, NULL, NULL, NULL, '$2y$10$yn2HNipf6Lwcqbm3tvLAteZBssbnAvfUKiCed4sUthQp2/XoR3UM2', NULL, '2021-06-21 07:04:35', '2021-06-21 07:04:35', 'Belum Terdaftar'),(1, 'Admin', 'adminbestro@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$keVCj5ZB/SzMdmOQY040nu5ouHKLYBgvX0t3hFo3pLTHVj7uTs2ru', NULL, NULL, '2021-06-22 16:33:39', NULL),(25, 'DD', 'DD@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, 'S1', '2021', 'Tidak Lolos', 'Tidak Lolos', 'aktif', NULL, NULL, NULL, NULL, '$2y$10$r1b/aKFFcR8H7XOyaMOop.YyfMLsgjp.yC23blvcPzcEiq8WdWZ3K', NULL, '2021-06-21 07:05:38', '2021-06-21 07:05:38', 'Belum Terdaftar'),(28, 'testinggggg', 'adskod@oaksdodk.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$7sg5qZlqELd1iKFttRX.qeteYTMuZ6s5zZxILe95wnr.SpJnW.1si', NULL, '2021-06-22 17:08:55', '2021-06-22 17:08:55', 'Belum Terdaftar'),(29, 'gringGo', 'aodskosa@asdas.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$cDCBOiCbX9Zhlc/4oSSdo.uUAlpedOj3VZNdSq8EQWeqnwqTjELCq', NULL, '2021-06-22 17:09:11', '2021-06-22 17:09:11', 'Belum Terdaftar'),(24, 'CC', 'CC@mail.com', NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, 'S1', '2021', 'Lolos', 'Tidak Lolos', 'aktif', NULL, NULL, NULL, NULL, '$2y$10$Tgh0A969bxJIeGLFTRlyU.6o5UOWP022FijL4peljBQqKj2aoXHzG', NULL, '2021-06-21 07:05:12', '2021-06-21 07:05:12', 'Belum Terdaftar'),(30, 'skadosdkaoasdkodsak', 'oaskdosak@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 'SMA', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$gU4FvRZFVHjDm65O17IB4OlC7yJ2iv9Yn0DoRzRe6ce191GNO7IbG', NULL, '2021-06-22 17:09:30', '2021-06-22 17:09:30', 'Belum Terdaftar'),(23, 'BB', 'bb@mail.com', 'Laki-Laki', 'Jombang', '1997-08-21', 'Islam', 'sa', '9098879', 9, 'd', 'S1', '2021', 'Lolos', 'Lolos', 'aktif', '2021-06-21', '09:59:00', 'Ditas', NULL, '$2y$10$ArfJIDU7rZU//t5yTz2qOOs/0LsTcsobR73dm0TznXBOl/hbdSRZ2', NULL, '2021-06-21 07:04:52', '2021-06-21 07:04:52', 'Belum Terdaftar'),(26, 'irfan dary sujatmiko', 'irfankarateka99@gmail.com', 'Laki-Laki', 'TULUNGAGUNG', '2021-06-01', 'Islam', 'dosakosdako', '081332893935', 1, 'aadskosakdos', 'SMA', '2021', 'Tidak Lolos', 'Tidak Lolos', 'aktif', NULL, NULL, NULL, NULL, '$2y$10$PDjr0I99H8qdjxivYExpmuJbwIkR8/IUarqzUOMJa1VQMN.o5bADq', NULL, '2021-06-22 14:36:25', '2021-06-22 14:36:25', 'Belum Terdaftar'),(31, 'testing', 'testinglagiyuk@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 'S1', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$IT/u.NuZm/SZpXu8GX5Xu.Fe0ynudeXkeD/0DEDzpsuVyjXxJeYjO', NULL, '2021-06-24 00:29:19', '2021-06-24 00:29:19', 'Belum Terdaftar'),(32, 'Sitha Lulu Nurhabibah', 'sithalulu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'S1', '2021', NULL, NULL, 'aktif', NULL, NULL, NULL, NULL, '$2y$10$LD51YrSiqFUYNQ6CwBbxAey3GLdKVCQvBO6/MFQkTAKdvMo6JayoK', NULL, '2021-06-24 01:10:02', '2021-06-24 01:10:02', 'Belum Terdaftar');
COMMIT;
ALTER TABLE "failed_jobs" ADD CONSTRAINT "failed_jobs_pkey" PRIMARY KEY ("id");
ALTER TABLE "migrations" ADD CONSTRAINT "migrations_pkey" PRIMARY KEY ("id");
CREATE INDEX "password_resets_email_index" ON "password_resets" USING btree (
  "email" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST
);
ALTER TABLE "tb_bansos" ADD CONSTRAINT "tb_bansos_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_berkas_admin" ADD CONSTRAINT "tb_berkas_admin_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_bukti_pelajar" ADD CONSTRAINT "tb_bukti_pelajar_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_data_orang_tua" ADD CONSTRAINT "tb_data_orang_tua_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_data_rumah" ADD CONSTRAINT "tb_data_rumah_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_form_pendaftaran" ADD CONSTRAINT "tb_form_pendaftaran_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_foto_diri" ADD CONSTRAINT "tb_foto_diri_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_foto_rumah" ADD CONSTRAINT "tb_foto_rumah_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_identitas" ADD CONSTRAINT "tb_identitas_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_ijazah_skhu" ADD CONSTRAINT "tb_ijazah_skhu_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_jurusan" ADD CONSTRAINT "tb_jurusan_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_nilai_akhir" ADD CONSTRAINT "tb_nilai_akhir_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_nilai_rapor" ADD CONSTRAINT "tb_nilai_rapor_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_pendidikan_s1" ADD CONSTRAINT "tb_pendidikan_s1_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_penghasilan" ADD CONSTRAINT "tb_penghasilan_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_piagam" ADD CONSTRAINT "tb_piagam_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_prestasi" ADD CONSTRAINT "tb_prestasi_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_rapor" ADD CONSTRAINT "tb_rapor_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_riwayat_pendidikan" ADD CONSTRAINT "tb_riwayat_pendidikan_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_saudara" ADD CONSTRAINT "tb_saudara_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_sekolah" ADD CONSTRAINT "tb_sekolah_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_sktm" ADD CONSTRAINT "tb_sktm_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_surat_pernyataan" ADD CONSTRAINT "tb_surat_pernyataan_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_tagihan" ADD CONSTRAINT "tb_tagihan_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_tanggungan" ADD CONSTRAINT "tb_tanggungan_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_ukt" ADD CONSTRAINT "tb_ukt_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_wawancara" ADD CONSTRAINT "tb_wawancara_pkey" PRIMARY KEY ("id");
ALTER TABLE "users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");
ALTER TABLE "tb_bansos" ADD CONSTRAINT "tb_bansos_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_bukti_pelajar" ADD CONSTRAINT "tb_bukti_pelajar_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_data_orang_tua" ADD CONSTRAINT "tb_data_orang_tua_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_data_rumah" ADD CONSTRAINT "tb_data_rumah_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_form_pendaftaran" ADD CONSTRAINT "tb_form_pendaftaran_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_foto_diri" ADD CONSTRAINT "tb_foto_diri_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_foto_rumah" ADD CONSTRAINT "tb_foto_rumah_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_identitas" ADD CONSTRAINT "tb_identitas_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_ijazah_skhu" ADD CONSTRAINT "tb_ijazah_skhu_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_nilai_akhir" ADD CONSTRAINT "tb_nilai_akhir_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_nilai_rapor" ADD CONSTRAINT "tb_nilai_rapor_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_pendidikan_s1" ADD CONSTRAINT "tb_pendidikan_s1_id_jurusan_foreign" FOREIGN KEY ("id_jurusan") REFERENCES "public"."tb_jurusan" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_pendidikan_s1" ADD CONSTRAINT "tb_pendidikan_s1_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_penghasilan" ADD CONSTRAINT "tb_penghasilan_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_piagam" ADD CONSTRAINT "tb_piagam_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_prestasi" ADD CONSTRAINT "tb_prestasi_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_rapor" ADD CONSTRAINT "tb_rapor_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_riwayat_pendidikan" ADD CONSTRAINT "tb_riwayat_pendidikan_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_saudara" ADD CONSTRAINT "tb_saudara_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_sktm" ADD CONSTRAINT "tb_sktm_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_surat_pernyataan" ADD CONSTRAINT "tb_surat_pernyataan_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_tagihan" ADD CONSTRAINT "tb_tagihan_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_tanggungan" ADD CONSTRAINT "tb_tanggungan_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_ukt" ADD CONSTRAINT "tb_ukt_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "tb_wawancara" ADD CONSTRAINT "tb_wawancara_id_user_foreign" FOREIGN KEY ("id_user") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "users" ADD CONSTRAINT "users_email_unique" UNIQUE ("email");
ALTER TABLE "users" ADD CONSTRAINT "users_asal_sekolah_foreign" FOREIGN KEY ("asal_sekolah") REFERENCES "public"."tb_sekolah" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER SEQUENCE "failed_jobs_id_seq"
OWNED BY "failed_jobs"."id";
SELECT setval('"failed_jobs_id_seq"', 2, false);
ALTER SEQUENCE "failed_jobs_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "migrations_id_seq"
OWNED BY "migrations"."id";
SELECT setval('"migrations_id_seq"', 325, true);
ALTER SEQUENCE "migrations_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_bansos_id_seq"
OWNED BY "tb_bansos"."id";
SELECT setval('"tb_bansos_id_seq"', 2, true);
ALTER SEQUENCE "tb_bansos_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_berkas_admin_id_seq"
OWNED BY "tb_berkas_admin"."id";
SELECT setval('"tb_berkas_admin_id_seq"', 4, true);
ALTER SEQUENCE "tb_berkas_admin_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_bukti_pelajar_id_seq"
OWNED BY "tb_bukti_pelajar"."id";
SELECT setval('"tb_bukti_pelajar_id_seq"', 5, true);
ALTER SEQUENCE "tb_bukti_pelajar_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_data_orang_tua_id_seq"
OWNED BY "tb_data_orang_tua"."id";
SELECT setval('"tb_data_orang_tua_id_seq"', 5, true);
ALTER SEQUENCE "tb_data_orang_tua_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_data_rumah_id_seq"
OWNED BY "tb_data_rumah"."id";
SELECT setval('"tb_data_rumah_id_seq"', 6, true);
ALTER SEQUENCE "tb_data_rumah_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_form_pendaftaran_id_seq"
OWNED BY "tb_form_pendaftaran"."id";
SELECT setval('"tb_form_pendaftaran_id_seq"', 2, false);
ALTER SEQUENCE "tb_form_pendaftaran_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_foto_diri_id_seq"
OWNED BY "tb_foto_diri"."id";
SELECT setval('"tb_foto_diri_id_seq"', 3, true);
ALTER SEQUENCE "tb_foto_diri_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_foto_rumah_id_seq"
OWNED BY "tb_foto_rumah"."id";
SELECT setval('"tb_foto_rumah_id_seq"', 4, true);
ALTER SEQUENCE "tb_foto_rumah_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_identitas_id_seq"
OWNED BY "tb_identitas"."id";
SELECT setval('"tb_identitas_id_seq"', 2, true);
ALTER SEQUENCE "tb_identitas_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_ijazah_skhu_id_seq"
OWNED BY "tb_ijazah_skhu"."id";
SELECT setval('"tb_ijazah_skhu_id_seq"', 2, true);
ALTER SEQUENCE "tb_ijazah_skhu_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_jurusan_id_seq"
OWNED BY "tb_jurusan"."id";
SELECT setval('"tb_jurusan_id_seq"', 9, true);
ALTER SEQUENCE "tb_jurusan_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_nilai_akhir_id_seq"
OWNED BY "tb_nilai_akhir"."id";
SELECT setval('"tb_nilai_akhir_id_seq"', 29, true);
ALTER SEQUENCE "tb_nilai_akhir_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_nilai_rapor_id_seq"
OWNED BY "tb_nilai_rapor"."id";
SELECT setval('"tb_nilai_rapor_id_seq"', 12, true);
ALTER SEQUENCE "tb_nilai_rapor_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_pendidikan_s1_id_seq"
OWNED BY "tb_pendidikan_s1"."id";
SELECT setval('"tb_pendidikan_s1_id_seq"', 2, true);
ALTER SEQUENCE "tb_pendidikan_s1_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_penghasilan_id_seq"
OWNED BY "tb_penghasilan"."id";
SELECT setval('"tb_penghasilan_id_seq"', 2, true);
ALTER SEQUENCE "tb_penghasilan_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_piagam_id_seq"
OWNED BY "tb_piagam"."id";
SELECT setval('"tb_piagam_id_seq"', 2, false);
ALTER SEQUENCE "tb_piagam_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_prestasi_id_seq"
OWNED BY "tb_prestasi"."id";
SELECT setval('"tb_prestasi_id_seq"', 3, true);
ALTER SEQUENCE "tb_prestasi_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_rapor_id_seq"
OWNED BY "tb_rapor"."id";
SELECT setval('"tb_rapor_id_seq"', 5, true);
ALTER SEQUENCE "tb_rapor_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_riwayat_pendidikan_id_seq"
OWNED BY "tb_riwayat_pendidikan"."id";
SELECT setval('"tb_riwayat_pendidikan_id_seq"', 5, true);
ALTER SEQUENCE "tb_riwayat_pendidikan_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_saudara_id_seq"
OWNED BY "tb_saudara"."id";
SELECT setval('"tb_saudara_id_seq"', 3, true);
ALTER SEQUENCE "tb_saudara_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_sekolah_id_seq"
OWNED BY "tb_sekolah"."id";
SELECT setval('"tb_sekolah_id_seq"', 12, true);
ALTER SEQUENCE "tb_sekolah_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_sktm_id_seq"
OWNED BY "tb_sktm"."id";
SELECT setval('"tb_sktm_id_seq"', 2, true);
ALTER SEQUENCE "tb_sktm_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_surat_pernyataan_id_seq"
OWNED BY "tb_surat_pernyataan"."id";
SELECT setval('"tb_surat_pernyataan_id_seq"', 4, true);
ALTER SEQUENCE "tb_surat_pernyataan_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_tagihan_id_seq"
OWNED BY "tb_tagihan"."id";
SELECT setval('"tb_tagihan_id_seq"', 2, true);
ALTER SEQUENCE "tb_tagihan_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_tanggungan_id_seq"
OWNED BY "tb_tanggungan"."id";
SELECT setval('"tb_tanggungan_id_seq"', 3, true);
ALTER SEQUENCE "tb_tanggungan_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_ukt_id_seq"
OWNED BY "tb_ukt"."id";
SELECT setval('"tb_ukt_id_seq"', 2, true);
ALTER SEQUENCE "tb_ukt_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "tb_wawancara_id_seq"
OWNED BY "tb_wawancara"."id";
SELECT setval('"tb_wawancara_id_seq"', 2, false);
ALTER SEQUENCE "tb_wawancara_id_seq" OWNER TO "postgres";
ALTER SEQUENCE "users_id_seq"
OWNED BY "users"."id";
SELECT setval('"users_id_seq"', 33, true);
ALTER SEQUENCE "users_id_seq" OWNER TO "postgres";
