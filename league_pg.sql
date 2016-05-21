--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.2
-- Dumped by pg_dump version 9.5.1

-- Started on 2016-04-05 22:18:03

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2113 (class 1262 OID 12373)
-- Dependencies: 2112
-- Name: postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- TOC entry 2 (class 3079 OID 12355)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2116 (class 0 OID 0)
-- Dependencies: 2
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- TOC entry 1 (class 3079 OID 16384)
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- TOC entry 2117 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 182 (class 1259 OID 16399)
-- Name: champion_stats; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE champion_stats (
    champion_id character varying,
    c_name character varying,
    wins integer,
    losses integer,
    games_played integer,
    win_rate integer,
    play_rate integer,
    kills integer,
    deaths integer,
    assists integer,
    kda integer,
    avg_kda integer
);


ALTER TABLE champion_stats OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 16405)
-- Name: games; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE games (
    game_id integer,
    s_name character varying,
    c_name character varying,
    won integer,
    kills integer,
    deaths integer,
    assists integer,
    kda double precision,
    game_date date
);


ALTER TABLE games OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 16411)
-- Name: summoners; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE summoners (
    summoner_id integer,
    user_id integer,
    s_name character varying,
    wins integer
);


ALTER TABLE summoners OWNER TO postgres;

--
-- TOC entry 2105 (class 0 OID 16399)
-- Dependencies: 182
-- Data for Name: champion_stats; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY champion_stats (champion_id, c_name, wins, losses, games_played, win_rate, play_rate, kills, deaths, assists, kda, avg_kda) FROM stdin;
1	Amumu	2	2	4	50	4	28	24	52	2	8
2	Annie	0	1	1	0	1	8	10	15	2	6
3	Ashe	3	3	6	50	6	75	53	144	3	16
4	Corki	4	0	4	100	4	62	18	89	6	22
5	Darius	1	0	1	100	1	18	9	33	4	26
6	Draven	1	1	2	50	2	30	23	42	2	14
7	Fiddlesticks	1	2	3	33	3	20	26	66	2	9
8	Gangplank	1	3	4	25	4	36	24	66	3	11
9	Gragas	1	0	1	100	1	22	7	18	4	24
10	Graves	1	1	2	50	2	12	12	18	2	5
11	Hecarim	0	1	1	0	1	2	12	25	1	3
12	Heimerdinger	1	0	1	100	1	12	3	19	7	19
13	Irelia	1	0	1	100	1	21	9	18	3	21
14	Jax	0	2	2	0	2	17	22	21	1	3
15	Jinx	2	0	2	100	2	28	14	39	3	17
16	Karma	4	1	5	80	5	56	30	118	4	17
17	Kassadin	2	2	4	50	4	21	33	68	2	6
18	Kayle	1	0	1	100	1	14	14	36	2	18
19	Lulu	1	0	1	100	1	10	7	26	3	16
20	Lux	0	1	1	0	1	10	8	16	2	10
21	Master Yi	0	1	1	0	1	11	13	11	1	4
22	Miss Fortune	0	1	1	0	1	6	10	24	2	8
23	Morgana	0	1	1	0	1	9	6	7	2	7
24	Nami	4	0	4	100	4	17	14	128	6	17
25	Nidalee	1	1	2	50	2	20	11	48	4	17
26	Orianna	0	1	1	0	1	8	7	15	2	9
27	Pantheon	1	4	5	20	5	64	64	79	2	8
28	Quinn	1	0	1	100	1	22	4	22	8	29
29	Ryze	2	0	2	100	2	27	14	59	4	21
30	Sejuani	2	0	2	100	2	10	9	36	3	10
31	Sivir	1	0	1	100	1	14	4	18	6	19
32	Sona	3	1	4	75	4	34	30	126	3	17
33	Soraka	9	2	11	82	11	86	60	333	4	18
34	Teemo	3	0	3	100	3	53	22	93	5	26
35	Tristana	2	1	3	67	3	54	26	61	3	20
36	Twisted Fate	1	0	1	100	1	8	4	14	4	11
37	Warwick	1	1	2	50	2	7	12	46	3	9
38	Ziggs	3	0	3	100	3	48	11	71	8	24
39	Veigar	0	1	1	0	1	7	9	18	2	7
\.


--
-- TOC entry 2106 (class 0 OID 16405)
-- Dependencies: 183
-- Data for Name: games; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY games (game_id, s_name, c_name, won, kills, deaths, assists, kda, game_date) FROM stdin;
1	Jampants	Ziggs	1	10	5	23	17	2013-12-28
2	Jampants	Teemo	1	12	5	36	25	2013-12-28
3	Jampants	Tristana	1	25	11	24	26	2013-12-28
4	Jampants	Amumu	1	16	8	13	15	2013-12-28
5	Jampants	Teemo	1	23	8	27	29	2013-12-28
6	Jampants	Tristana	1	23	6	23	29	2013-12-28
7	Jampants	Pantheon	1	13	14	15	7	2013-12-28
8	Jampants	Soraka	1	6	11	52	21	2013-12-28
9	Jampants	Ashe	1	16	6	24	22	2013-12-28
10	Jampants	Nidalee	1	11	6	23	17	2013-12-28
11	Jampants	Ziggs	1	22	4	18	27	2013-12-28
12	Jampants	Soraka	1	8	7	30	16	2013-12-28
13	Jampants	Gangplank	0	12	5	20	17	2013-12-28
14	Jampants	Ryze	1	19	9	39	30	2013-12-28
15	Jampants	Fiddlesticks	0	5	9	14	3	2013-12-28
16	Jampants	Soraka	0	1	8	26	6	2013-12-28
17	Jampants	Pantheon	0	5	11	18	3	2013-12-28
18	Jampants	Corki	1	17	2	28	29	2013-12-28
19	Jampants	Soraka	1	13	6	39	27	2013-12-28
20	Jampants	Corki	1	16	6	20	20	2013-12-28
21	Jampants	Ziggs	1	16	2	30	29	2013-12-28
22	Jampants	Nami	1	4	4	30	15	2013-12-28
23	Jampants	Miss Fortune	0	6	10	24	8	2013-12-28
24	Jampants	Corki	1	19	6	25	26	2013-12-28
25	Jampants	Jax	0	12	14	14	5	2013-12-28
26	Jampants	Gangplank	0	7	8	18	8	2013-12-28
27	Jampants	Ashe	0	11	12	35	17	2013-12-28
28	Jampants	Darius	1	18	9	33	26	2013-12-28
29	VisserZero	Karma	1	7	4	18	12	2013-12-28
30	VisserZero	Karma	1	15	2	22	24	2013-12-28
31	VisserZero	Kassadin	0	6	8	11	4	2013-12-28
32	VisserZero	Quinn	1	22	4	22	29	2013-12-28
33	VisserZero	Heimerdinger	1	12	3	19	19	2013-12-28
34	VisserZero	Kassadin	1	7	10	23	9	2013-12-28
35	VisserZero	Twisted Fate	1	8	4	14	11	2013-12-28
36	Jampants	Teemo	1	18	9	30	24	2013-12-28
37	Jampants	Amumu	1	5	3	14	9	2013-12-28
38	Jampants	Sivir	1	14	4	18	19	2013-12-28
39	Jampants	Sona	1	7	5	20	12	2013-12-28
40	Jampants	Sona	1	7	9	50	23	2013-12-28
41	Jampants	Amumu	0	2	7	14	2	2013-12-28
42	Jampants	Ryze	1	8	5	20	13	2013-12-28
43	Jampants	Sona	0	18	12	24	18	2013-12-28
44	VisserZero	Karma	0	10	12	10	3	2013-12-28
45	VisserZero	Soraka	1	7	3	22	15	2013-12-28
46	VisserZero	Master Yi	0	11	13	11	4	2013-12-28
47	VisserZero	Graves	0	3	4	1	-1	2013-12-28
48	Jampants	Corki	1	10	4	16	14	2013-12-28
49	Jampants	Gangplank	0	7	7	14	7	2013-12-28
50	Jampants	Jinx	1	7	6	15	9	2013-12-28
51	Jampants	Nami	1	6	4	42	23	2013-12-28
52	VisserZero	Soraka	1	15	2	29	28	2013-12-28
53	VisserZero	Karma	1	15	4	34	28	2013-12-28
54	VisserZero	Irelia	1	21	9	18	21	2013-12-28
55	VisserZero	Kassadin	1	7	3	21	15	2013-12-28
56	Jampants	Gragas	1	22	7	18	24	2013-12-28
57	VisserZero	Soraka	1	10	3	21	18	2013-12-28
58	VisserZero	Lulu	1	10	7	26	16	2013-12-28
59	VisserZero	Graves	1	9	8	17	10	2013-12-28
60	VisserZero	Orianna	0	8	7	15	9	2013-12-28
61	VisserZero	Soraka	1	5	1	33	21	2013-12-28
62	VisserZero	Draven	1	19	10	20	19	2013-12-28
63	VisserZero	Sejuani	1	4	6	20	8	2013-12-28
64	VisserZero	Soraka	1	7	10	41	18	2013-12-28
65	VisserZero	Kassadin	0	1	12	13	-5	2013-12-28
66	VisserZero	Morgana	0	9	6	7	7	2013-12-28
67	VisserZero	Draven	0	11	13	22	9	2013-12-28
68	VisserZero	Sejuani	1	6	3	16	11	2013-12-28
69	Jampants	Jax	0	5	8	7	1	2013-12-28
70	Jampants	Annie	0	8	10	15	6	2013-12-28
71	Jampants	Hecarim	0	2	12	25	3	2013-12-31
72	Jampants	Pantheon	0	5	9	7	-1	2013-12-31
73	Jampants	Kayle	1	14	14	36	18	2013-12-31
74	Jampants	Nidalee	0	9	5	25	17	2013-12-31
75	Jampants	Ashe	1	9	7	33	19	2013-12-31
76	Jampants	Gangplank	1	10	4	14	13	2013-12-31
77	Jampants	Tristana	0	6	9	14	4	2013-12-31
78	Jampants	Soraka	1	9	2	27	21	2013-12-31
79	Jampants	Ashe	0	12	8	17	13	2013-12-31
80	Jampants	Ashe	1	14	10	19	14	2013-12-31
81	Jampants	Karma	1	9	8	34	18	2013-12-31
82	Jampants	Nami	1	2	3	39	19	2013-12-31
83	Jampants	Lux	0	10	8	16	10	2013-12-31
84	Jampants	Warwick	1	6	4	27	16	2014-01-01
85	Jampants	Nami	1	5	3	17	11	2014-01-01
86	Jampants	Jinx	1	21	8	24	25	2014-01-01
87	Jampants	Fiddlesticks	1	3	4	21	10	2014-01-01
88	Jampants	Warwick	0	1	8	19	3	2014-01-01
89	Jampants	Pantheon	0	16	18	24	10	2014-01-01
90	Jampants	Amumu	0	5	6	11	5	2014-01-02
91	Jampants	Soraka	0	5	7	13	5	2014-01-02
92	Jampants	Ashe	0	13	10	16	11	2014-01-02
93	Jampants	Fiddlesticks	0	12	13	31	15	2014-01-02
94	Jampants	Sona	1	2	4	32	14	2014-01-02
95	Jampants	Pantheon	0	25	12	15	21	2014-01-02
96	Jampants	Veigar	0	7	9	18	7	2014-01-02
\N	Jampants	Nautilus	1	6	10	31	11.5	2016-04-05
\N	Jampants	Amumu	1	13	13	37	18.5	2016-04-05
\.


--
-- TOC entry 2107 (class 0 OID 16411)
-- Dependencies: 184
-- Data for Name: summoners; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY summoners (summoner_id, user_id, s_name, wins) FROM stdin;
1	1	Jampants	\N
2	1	VisserZero	\N
\.


--
-- TOC entry 2115 (class 0 OID 0)
-- Dependencies: 7
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-04-05 22:18:03

--
-- PostgreSQL database dump complete
--

