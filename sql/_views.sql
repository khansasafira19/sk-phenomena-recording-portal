/* Run this views on SQL tab in PhpMyAdmin after exporting the sk_prs.sql"*/
CREATE OR REPLACE VIEW daftarfenomenakat01 AS
SELECT *,"kat01" AS kategori, CONCAT(id, "_01") AS idkat FROM fenomena WHERE kat01 = 1

CREATE OR REPLACE VIEW daftarfenomenakat02 AS
SELECT *,"kat02" AS kategori, CONCAT(id, "_02") AS idkat FROM fenomena WHERE kat02 = 1

CREATE OR REPLACE VIEW daftarfenomenakat03 AS
SELECT *,"kat03" AS kategori, CONCAT(id, "_03") AS idkat FROM fenomena WHERE kat03 = 1

CREATE OR REPLACE VIEW daftarfenomenakat04 AS
SELECT *,"kat04" AS kategori, CONCAT(id, "_04") AS idkat FROM fenomena WHERE kat04 = 1

CREATE OR REPLACE VIEW daftarfenomenakat05 AS
SELECT *,"kat05" AS kategori, CONCAT(id, "_05") AS idkat FROM fenomena WHERE kat05 = 1

CREATE OR REPLACE VIEW daftarfenomenakat06 AS
SELECT *,"kat06" AS kategori, CONCAT(id, "_06") AS idkat FROM fenomena WHERE kat06 = 1

CREATE OR REPLACE VIEW daftarfenomenakat07 AS
SELECT *,"kat07" AS kategori, CONCAT(id, "_07") AS idkat FROM fenomena WHERE kat07 = 1

CREATE OR REPLACE VIEW daftarfenomenakat08 AS
SELECT *,"kat08" AS kategori, CONCAT(id, "_08") AS idkat FROM fenomena WHERE kat08 = 1

CREATE OR REPLACE VIEW daftarfenomenakat09 AS
SELECT *,"kat09" AS kategori, CONCAT(id, "_09") AS idkat FROM fenomena WHERE kat09 = 1

CREATE OR REPLACE VIEW daftarfenomenakat10 AS
SELECT *,"kat10" AS kategori, CONCAT(id, "_10") AS idkat FROM fenomena WHERE kat10 = 1

CREATE OR REPLACE VIEW daftarfenomenakat11 AS
SELECT *,"kat11" AS kategori, CONCAT(id, "_11") AS idkat FROM fenomena WHERE kat11 = 1

CREATE OR REPLACE VIEW daftarfenomenakat12 AS
SELECT *,"kat12" AS kategori, CONCAT(id, "_12") AS idkat FROM fenomena WHERE kat12 = 1

CREATE OR REPLACE VIEW daftarfenomenakat13 AS
SELECT *,"kat13" AS kategori, CONCAT(id, "_13") AS idkat FROM fenomena WHERE kat13 = 1

CREATE OR REPLACE VIEW daftarfenomenakat14 AS
SELECT *,"kat14" AS kategori, CONCAT(id, "_14") AS idkat FROM fenomena WHERE kat14 = 1

CREATE OR REPLACE VIEW daftarfenomenakat15 AS
SELECT *,"kat15" AS kategori, CONCAT(id, "_15") AS idkat FROM fenomena WHERE kat15 = 1

CREATE OR REPLACE VIEW daftarfenomenakat16 AS
SELECT *,"kat16" AS kategori, CONCAT(id, "_16") AS idkat FROM fenomena WHERE kat16 = 1

CREATE OR REPLACE VIEW daftarfenomenakat17 AS
SELECT *,"kat17" AS kategori, CONCAT(id, "_17") AS idkat FROM fenomena WHERE kat17 = 1

CREATE OR REPLACE VIEW daftarfenomenakomp01 AS
SELECT *,"komp01" AS kategori, CONCAT(id, "_k01") AS idkat FROM fenomena WHERE komp01 = 1

CREATE OR REPLACE VIEW daftarfenomenakomp02 AS
SELECT *,"komp02" AS kategori, CONCAT(id, "_k02") AS idkat FROM fenomena WHERE komp02 = 1

CREATE OR REPLACE VIEW daftarfenomenakomp03 AS
SELECT *,"komp03" AS kategori, CONCAT(id, "_k03") AS idkat FROM fenomena WHERE komp03 = 1

CREATE OR REPLACE VIEW daftarfenomenakomp04 AS
SELECT *,"komp04" AS kategori, CONCAT(id, "_k04") AS idkat FROM fenomena WHERE komp04 = 1

CREATE OR REPLACE VIEW daftarfenomenakomp05 AS
SELECT *,"komp05" AS kategori, CONCAT(id, "_k05") AS idkat FROM fenomena WHERE komp05 = 1

CREATE OR REPLACE VIEW daftarfenomenakomp06 AS
SELECT *,"komp06" AS kategori, CONCAT(id, "_k06") AS idkat FROM fenomena WHERE komp06 = 1

CREATE OR REPLACE VIEW daftarfenomenakomp07 AS
SELECT *,"komp07" AS kategori, CONCAT(id, "_k07") AS idkat FROM fenomena WHERE komp07 = 1

CREATE OR REPLACE VIEW daftarfenomenagabung AS
SELECT * FROM daftarfenomenakat01
UNION
SELECT * FROM daftarfenomenakat02
UNION
SELECT * FROM daftarfenomenakat03
UNION
SELECT * FROM daftarfenomenakat04
UNION
SELECT * FROM daftarfenomenakat05
UNION
SELECT * FROM daftarfenomenakat06
UNION
SELECT * FROM daftarfenomenakat07
UNION
SELECT * FROM daftarfenomenakat08
UNION
SELECT * FROM daftarfenomenakat09
UNION
SELECT * FROM daftarfenomenakat10
UNION
SELECT * FROM daftarfenomenakat11
UNION
SELECT * FROM daftarfenomenakat12
UNION
SELECT * FROM daftarfenomenakat13
UNION
SELECT * FROM daftarfenomenakat14
UNION
SELECT * FROM daftarfenomenakat15
UNION
SELECT * FROM daftarfenomenakat16
UNION
SELECT * FROM daftarfenomenakat17
UNION
SELECT * FROM daftarfenomenakomp01
UNION
SELECT * FROM daftarfenomenakomp02
UNION
SELECT * FROM daftarfenomenakomp03
UNION
SELECT * FROM daftarfenomenakomp04
UNION
SELECT * FROM daftarfenomenakomp05
UNION
SELECT * FROM daftarfenomenakomp06
UNION
SELECT * FROM daftarfenomenakomp07
