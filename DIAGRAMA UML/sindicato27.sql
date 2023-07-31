--
-- PostgreSQL database dump
--

-- Dumped from database version 14.3
-- Dumped by pg_dump version 15.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: db_grupo03cc; Type: DATABASE; Schema: -; Owner: grupo03cc
--

CREATE DATABASE db_grupo03cc WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'en_US.UTF-8';


ALTER DATABASE db_grupo03cc OWNER TO grupo03cc;

\connect db_grupo03cc

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

-- *not* creating schema, since initdb creates it


ALTER SCHEMA public OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO grupo03cc;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO grupo03cc;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: mantenimientos; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.mantenimientos (
    id bigint NOT NULL,
    descripcion character varying(255) NOT NULL,
    fecha character varying(255) NOT NULL,
    monto character varying(255) NOT NULL,
    id_vehiculo bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.mantenimientos OWNER TO grupo03cc;

--
-- Name: mantenimientos_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.mantenimientos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mantenimientos_id_seq OWNER TO grupo03cc;

--
-- Name: mantenimientos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.mantenimientos_id_seq OWNED BY public.mantenimientos.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO grupo03cc;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO grupo03cc;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO grupo03cc;

--
-- Name: personal; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.personal (
    id bigint NOT NULL,
    ci character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    apellido character varying(255) NOT NULL,
    edad character varying(255) NOT NULL,
    telefono character varying(255) NOT NULL,
    direccion character varying(255) NOT NULL,
    cat_lic character(255),
    id_tipopersonal bigint NOT NULL,
    id_sindicato bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal OWNER TO grupo03cc;

--
-- Name: personal_access_tokens; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.personal_access_tokens OWNER TO grupo03cc;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_access_tokens_id_seq OWNER TO grupo03cc;

--
-- Name: personal_access_tokens_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;


--
-- Name: personal_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.personal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personal_id_seq OWNER TO grupo03cc;

--
-- Name: personal_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.personal_id_seq OWNED BY public.personal.id;


--
-- Name: promociones; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.promociones (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.promociones OWNER TO grupo03cc;

--
-- Name: promociones_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.promociones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.promociones_id_seq OWNER TO grupo03cc;

--
-- Name: promociones_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.promociones_id_seq OWNED BY public.promociones.id;


--
-- Name: rutas; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.rutas (
    id bigint NOT NULL,
    origen character varying(255) NOT NULL,
    destino character varying(255) NOT NULL,
    tarifa character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.rutas OWNER TO grupo03cc;

--
-- Name: rutas_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.rutas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rutas_id_seq OWNER TO grupo03cc;

--
-- Name: rutas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.rutas_id_seq OWNED BY public.rutas.id;


--
-- Name: sindicatos; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.sindicatos (
    id bigint NOT NULL,
    nombre character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.sindicatos OWNER TO grupo03cc;

--
-- Name: sindicatos_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.sindicatos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sindicatos_id_seq OWNER TO grupo03cc;

--
-- Name: sindicatos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.sindicatos_id_seq OWNED BY public.sindicatos.id;


--
-- Name: tipopersonal; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.tipopersonal (
    id bigint NOT NULL,
    descripcion character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tipopersonal OWNER TO grupo03cc;

--
-- Name: tipopersonal_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.tipopersonal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipopersonal_id_seq OWNER TO grupo03cc;

--
-- Name: tipopersonal_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.tipopersonal_id_seq OWNED BY public.tipopersonal.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    id_personal bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO grupo03cc;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO grupo03cc;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: vehiculos; Type: TABLE; Schema: public; Owner: grupo03cc
--

CREATE TABLE public.vehiculos (
    id bigint NOT NULL,
    linea integer NOT NULL,
    placa character varying(255) NOT NULL,
    marca character varying(255) NOT NULL,
    modelo character varying(255) NOT NULL,
    id_personal bigint NOT NULL,
    id_sindicato bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.vehiculos OWNER TO grupo03cc;

--
-- Name: vehiculos_id_seq; Type: SEQUENCE; Schema: public; Owner: grupo03cc
--

CREATE SEQUENCE public.vehiculos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.vehiculos_id_seq OWNER TO grupo03cc;

--
-- Name: vehiculos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: grupo03cc
--

ALTER SEQUENCE public.vehiculos_id_seq OWNED BY public.vehiculos.id;


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: mantenimientos id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.mantenimientos ALTER COLUMN id SET DEFAULT nextval('public.mantenimientos_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: personal id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.personal ALTER COLUMN id SET DEFAULT nextval('public.personal_id_seq'::regclass);


--
-- Name: personal_access_tokens id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);


--
-- Name: promociones id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.promociones ALTER COLUMN id SET DEFAULT nextval('public.promociones_id_seq'::regclass);


--
-- Name: rutas id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.rutas ALTER COLUMN id SET DEFAULT nextval('public.rutas_id_seq'::regclass);


--
-- Name: sindicatos id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.sindicatos ALTER COLUMN id SET DEFAULT nextval('public.sindicatos_id_seq'::regclass);


--
-- Name: tipopersonal id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.tipopersonal ALTER COLUMN id SET DEFAULT nextval('public.tipopersonal_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Name: vehiculos id; Type: DEFAULT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.vehiculos ALTER COLUMN id SET DEFAULT nextval('public.vehiculos_id_seq'::regclass);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- Name: mantenimientos mantenimientos_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.mantenimientos
    ADD CONSTRAINT mantenimientos_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);


--
-- Name: personal_access_tokens personal_access_tokens_token_unique; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);


--
-- Name: personal personal_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_pkey PRIMARY KEY (id);


--
-- Name: promociones promociones_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.promociones
    ADD CONSTRAINT promociones_pkey PRIMARY KEY (id);


--
-- Name: rutas rutas_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.rutas
    ADD CONSTRAINT rutas_pkey PRIMARY KEY (id);


--
-- Name: sindicatos sindicatos_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.sindicatos
    ADD CONSTRAINT sindicatos_pkey PRIMARY KEY (id);


--
-- Name: tipopersonal tipopersonal_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.tipopersonal
    ADD CONSTRAINT tipopersonal_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: vehiculos vehiculos_pkey; Type: CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.vehiculos
    ADD CONSTRAINT vehiculos_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: grupo03cc
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: personal_access_tokens_tokenable_type_tokenable_id_index; Type: INDEX; Schema: public; Owner: grupo03cc
--

CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);


--
-- Name: mantenimientos mantenimientos_id_vehiculo_foreign; Type: FK CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.mantenimientos
    ADD CONSTRAINT mantenimientos_id_vehiculo_foreign FOREIGN KEY (id_vehiculo) REFERENCES public.vehiculos(id);


--
-- Name: personal personal_id_sindicato_foreign; Type: FK CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_id_sindicato_foreign FOREIGN KEY (id_sindicato) REFERENCES public.sindicatos(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: personal personal_id_tipopersonal_foreign; Type: FK CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_id_tipopersonal_foreign FOREIGN KEY (id_tipopersonal) REFERENCES public.tipopersonal(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: users users_id_personal_foreign; Type: FK CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_id_personal_foreign FOREIGN KEY (id_personal) REFERENCES public.personal(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: vehiculos vehiculos_id_personal_foreign; Type: FK CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.vehiculos
    ADD CONSTRAINT vehiculos_id_personal_foreign FOREIGN KEY (id_personal) REFERENCES public.personal(id);


--
-- Name: vehiculos vehiculos_id_sindicato_foreign; Type: FK CONSTRAINT; Schema: public; Owner: grupo03cc
--

ALTER TABLE ONLY public.vehiculos
    ADD CONSTRAINT vehiculos_id_sindicato_foreign FOREIGN KEY (id_sindicato) REFERENCES public.sindicatos(id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

