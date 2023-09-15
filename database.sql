CREATE TABLE IF NOT EXISTS "snow" (
	"id" serial primary key,
	"date" DATE,
	"amount" NUMERIC
);

INSERT INTO "snow" ("date","amount")
VALUES ('02-20-2011', 13.8), ('12-10-2010', 17.1), ('04-13-2018',15.1);