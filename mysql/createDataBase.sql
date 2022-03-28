CREATE TABLE administrator (
    id                     INT(10) NOT NULL,
    name                   VARCHAR(30) NOT NULL,
    last_name              VARCHAR(30) NOT NULL,
    mail                   VARCHAR(50) NOT NULL,
    Vpassword              VARCHAR(20) NOT NULL,
    super_administrator_id INT(10),
    validated              boolean NOT NULL
);


ALTER TABLE administrator ADD CONSTRAINT administrator_pk PRIMARY KEY ( id );
ALTER TABLE `administrator` CHANGE `id` `id` INT(10) NOT NULL AUTO_INCREMENT;

CREATE TABLE doctor (
    id                     INT(10) NOT NULL,
    name                   VARCHAR(30) NOT NULL,
    last_name              VARCHAR(30) NOT NULL,
    mail                   VARCHAR(50) NOT NULL,
    Vpassword              VARCHAR(20) NOT NULL,
    validated              boolean NOT NULL
);


ALTER TABLE doctor ADD CONSTRAINT doctor_pk PRIMARY KEY (id);
ALTER TABLE `doctor` CHANGE `id` `id` INT(10) NOT NULL AUTO_INCREMENT;

CREATE TABLE patient (
    id                     INT(10) NOT NULL,
    name                   VARCHAR(30) NOT NULL,
    last_name              VARCHAR(30) NOT NULL,
    mail                   VARCHAR(50) NOT NULL,
    Vpassword              VARCHAR(20) NOT NULL,
    validated              boolean NOT NULL,
    doctor_id              INT(10),
    temperature_history_id INT(10)
);

CREATE UNIQUE INDEX patient__idx ON
    patient (
        temperature_history_id
    ASC );


ALTER TABLE patient ADD CONSTRAINT patient_pk PRIMARY KEY ( id );
ALTER TABLE `patient` CHANGE `id` `id` INT(10) NOT NULL AUTO_INCREMENT;

CREATE TABLE super_administrator (
    id                     INT(10) NOT NULL,
    name                   VARCHAR(30) NOT NULL,
    last_name              VARCHAR(30) NOT NULL,
    mail                   VARCHAR(50) NOT NULL,
    Vpassword              VARCHAR(20) NOT NULL
    
);


ALTER TABLE super_administrator ADD CONSTRAINT super_administrator_pk PRIMARY KEY ( id );
ALTER TABLE `super_administrator` CHANGE `id` `id` INT(10) NOT NULL AUTO_INCREMENT;

CREATE TABLE temperature (
    id                     INT(10) NOT NULL,
    degrees                FLOAT,
    dateTemp               DATE NOT NULL,
    history                INT(10) NOT NULL
);


ALTER TABLE temperature ADD CONSTRAINT temperature_pk PRIMARY KEY ( id );
ALTER TABLE `temperature` CHANGE `id` `id` INT(10) NOT NULL AUTO_INCREMENT;

CREATE TABLE temperature_history (
    id             INT(10) NOT NULL
);



ALTER TABLE temperature_history ADD CONSTRAINT temperature_history_pk PRIMARY KEY ( id );
ALTER TABLE `temperature_history` CHANGE `id` `id` INT(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE administrator
    ADD CONSTRAINT administrator_super_administrator_fk FOREIGN KEY ( super_administrator_id )
        REFERENCES super_administrator ( id );


ALTER TABLE patient
    ADD CONSTRAINT patient_doctor_fk FOREIGN KEY ( doctor_id)
        REFERENCES doctor ( id);

ALTER TABLE patient
    ADD CONSTRAINT patient_temperature_history_fk FOREIGN KEY ( temperature_history_id )
        REFERENCES temperature_history ( id );

ALTER TABLE temperature
    ADD CONSTRAINT temperature_temperature_history_fk FOREIGN KEY ( history )
        REFERENCES temperature_history ( id );

        ALTER TABLE super_administrator ADD UNIQUE(mail);
        ALTER TABLE administrator ADD UNIQUE(mail);
        ALTER TABLE patient ADD UNIQUE(mail);
        ALTER TABLE doctor ADD UNIQUE(mail);
