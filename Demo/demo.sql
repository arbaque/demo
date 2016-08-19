--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.3
-- Dumped by pg_dump version 9.5.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: ciudad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE ciudad (
    id_ciudad integer NOT NULL,
    nombre character(100) NOT NULL
);


ALTER TABLE ciudad OWNER TO postgres;

--
-- Name: TABLE ciudad; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE ciudad IS 'Tabla CIudad';


--
-- Name: ciudad_id_ciudad_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ciudad_id_ciudad_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ciudad_id_ciudad_seq OWNER TO postgres;

--
-- Name: ciudad_id_ciudad_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE ciudad_id_ciudad_seq OWNED BY ciudad.id_ciudad;


--
-- Name: demo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE demo (
    id_demo integer NOT NULL,
    nombre character(1000),
    foto character(500)
);


ALTER TABLE demo OWNER TO postgres;

--
-- Name: demo_id_demo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE demo_id_demo_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE demo_id_demo_seq OWNER TO postgres;

--
-- Name: demo_id_demo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE demo_id_demo_seq OWNED BY demo.id_demo;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE usuario (
    id_usuario integer NOT NULL,
    nombre character(1000)
);


ALTER TABLE usuario OWNER TO postgres;

--
-- Name: usuario_ciudad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE usuario_ciudad (
    id integer NOT NULL,
    idusuario bigint NOT NULL,
    idciudad bigint NOT NULL
);


ALTER TABLE usuario_ciudad OWNER TO postgres;

--
-- Name: usuario_ciudad_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_ciudad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_ciudad_id_seq OWNER TO postgres;

--
-- Name: usuario_ciudad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_ciudad_id_seq OWNED BY usuario_ciudad.id;


--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_id_usuario_seq OWNER TO postgres;

--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_id_usuario_seq OWNED BY usuario.id_usuario;


--
-- Name: id_ciudad; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ciudad ALTER COLUMN id_ciudad SET DEFAULT nextval('ciudad_id_ciudad_seq'::regclass);


--
-- Name: id_demo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY demo ALTER COLUMN id_demo SET DEFAULT nextval('demo_id_demo_seq'::regclass);


--
-- Name: id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario ALTER COLUMN id_usuario SET DEFAULT nextval('usuario_id_usuario_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_ciudad ALTER COLUMN id SET DEFAULT nextval('usuario_ciudad_id_seq'::regclass);


--
-- Data for Name: ciudad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY ciudad (id_ciudad, nombre) FROM stdin;
\.


--
-- Name: ciudad_id_ciudad_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ciudad_id_ciudad_seq', 1, false);


--
-- Data for Name: demo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY demo (id_demo, nombre, foto) FROM stdin;
4	anibal baque                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            	foto.jpg                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
6	Profesor                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                	157627.jpg                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
\.


--
-- Name: demo_id_demo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('demo_id_demo_seq', 32, true);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario (id_usuario, nombre) FROM stdin;
\.


--
-- Data for Name: usuario_ciudad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario_ciudad (id, idusuario, idciudad) FROM stdin;
\.


--
-- Name: usuario_ciudad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_ciudad_id_seq', 1, false);


--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_id_usuario_seq', 1, false);


--
-- Name: pkidciudad; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ciudad
    ADD CONSTRAINT pkidciudad PRIMARY KEY (id_ciudad);


--
-- Name: pkiddemo; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY demo
    ADD CONSTRAINT pkiddemo PRIMARY KEY (id_demo);


--
-- Name: pkidusuario; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT pkidusuario PRIMARY KEY (id_usuario);


--
-- Name: usuario_ciudad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_ciudad
    ADD CONSTRAINT usuario_ciudad_pkey PRIMARY KEY (id);


--
-- Name: fkciudad; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_ciudad
    ADD CONSTRAINT fkciudad FOREIGN KEY (idciudad) REFERENCES ciudad(id_ciudad);


--
-- Name: fkusuario; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario_ciudad
    ADD CONSTRAINT fkusuario FOREIGN KEY (idusuario) REFERENCES usuario(id_usuario);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

