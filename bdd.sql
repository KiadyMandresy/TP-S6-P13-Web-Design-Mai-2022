create database climat;
use climat;


create table admin (
    id int not null AUTO_INCREMENT,
    nom varchar(100),
    mdp varchar(255),
    primary key (id)
) ;

create table typeRechauffement(
    id int not null AUTO_INCREMENT,
    nom VARCHAR(100),
    primary key (id)
);


create table rechauffement(
    id int not null AUTO_INCREMENT,
    idType int,
    lieu VARCHAR(50),
    date date,
    primary key (id),
    foreign key (idtype) references typeRechauffement(id)
);

insert into admin values (null,'kiady',sha1('qwerty'));
insert into admin values (null,'Ravo',sha1('qwerty'));

insert into typeRechauffement values(null, 'fonte de glace');
insert into typeRechauffement values(null, 'extreme chaleur');
insert into typeRechauffement values(null, 'kaykaykay');

insert into rechauffement values(null,1,'Alaska','2021-08-07');
insert into rechauffement values(null,1,'canada','2021-11-11');
insert into rechauffement values(null,1,'pole nord','2022-02-04');


insert into rechauffement values(null,2,'mada','2021-08-07');
insert into rechauffement values(null,2,'mexique','2021-11-11');
insert into rechauffement values(null,2,'soudan','2022-02-04');


insert into rechauffement values(null,3,'lol','2021-08-07');
insert into rechauffement values(null,3,'mdr','2021-11-11');
insert into rechauffement values(null,3,'ptdr nord','2022-02-04');


