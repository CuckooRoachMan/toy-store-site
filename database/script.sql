use subela;

DROP TABLE IF EXISTS products;
CREATE TABLE products (
	num_products_pk int auto_increment PRIMARY KEY,
    txt_products_name varchar(150),
	txt_url_img varchar(150),
    txt_description longtext,
    txt_type varchar(150),
    num_price decimal(10,2),
    dat_creation timestamp default current_timestamp,
    dat_lastedit timestamp default current_timestamp on UPDATE current_timestamp ,
    num_admins_fk int,
    num_catalogs_fk int 
    
); 

INSERT INTO products(txt_products_name,txt_url_img,txt_description,txt_type,num_price,num_admins_fk,num_catalogs_fk)
values
('Peluche De Conjeo White Star 2','https://mir-s3-cdn-cf.behance.net/project_modules/disp/9f22a625010163.5604b553ab604.jpg','Peluche hecho a mano','peluche',15.99,1,1), 
('Peluche De Conjeo White Star 3','https://mir-s3-cdn-cf.behance.net/project_modules/disp/5db85025010167.5604b5d5b6c21.jpg','Peluche hecho a mano','peluche',15.99,1,1),
('Paquete de Peluches White Star','https://mir-s3-cdn-cf.behance.net/project_modules/disp/5f9ce025010151.5604b4e82e2d1.jpg','peluche hecho a mano','peluche',65.99,1,1),
('The Adventures and Memoirs of Sherlock Holmes','https://mir-s3-cdn-cf.behance.net/project_modules/disp/ae660928806119.55d35a1f4591f.gif','Recopilacion de cuentos de Sir Arthur Conan Doyle','libro',5.99,1,1),
('Green Eggs and Ham','https://mir-s3-cdn-cf.behance.net/project_modules/disp/4324c928806119.55d35a1f6a102.gif','Cuento Clasico de Dr Seuss','libro',4.99,1,1),
('Two Headed Alpaca','https://mir-s3-cdn-cf.behance.net/project_modules/disp/50dcee52394005.5608dda0919c8.jpg','Figura de Vinilo','Figura',35.99,1,1),
('Matroshka Dolls','https://mir-s3-cdn-cf.behance.net/project_modules/disp/c0ea1548528761.5608357303cff.png','Set de muñecas Matroshka','Figura',50.99,1,1),
('Kidzilla Gamer Girl','https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/8c6d6b35041371.56e7a6c6e0a4f.jpg','Figura de Vinilo','Figura',40.99,1,1),
('My Black Cats Collection','https://farm4.staticflickr.com/3948/15548523168_2a48f5eef9_b.jpg','Coleccion de figuras porcelana','Figura',20.99,1,1),
('Mr. Pepper','https://farm5.staticflickr.com/4018/4210392895_635d2f4166_b.jpg','Figura de Vinilos','Figura',25.99,1,1)
;


DROP TABLE IF exists catalogs;
CREATE TABLE catalogs (
	num_catalogs_pk int auto_increment PRIMARY KEY,
    dat_creation timestamp default current_timestamp,
    txt_season varchar(150) 
);
INSERT INTO catalogs(txt_season)
values
('Fall 2019'),
('Winter 2019');


DROP TABLE IF exists admins;
CREATE TABLE admins (
	id int auto_increment PRIMARY KEY,
    txt_admins_name varchar(150),
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on UPDATE current_timestamp, 
    `password` varchar(255) DEFAULT NULL 
    
);

INSERT INTO admins(txt_admins_name,`password`)
values
('jorge',password('*6subela')),
('adminbackup',password('*6subela')),
('adminbackup','unprotected');




show tables;

select * from products
select * from users 
select * from admins
