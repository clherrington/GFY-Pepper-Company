create database GFY;
use GFY;


Create table `Pepper Archive`  (
PepperID Varchar(5) not null primary key, 
Name varchar ( 20) not null, 
Description varchar(100) not null, 
`Scoville Scale` varchar(10) not null,
Year int not null
);

Create table Plots (
PlotID int not null Primary Key, 
Dimensions varchar (10) not null, 
Capacity int not null
);

create table `Current Peppers` (
PepperID varchar(5) not null, 
PlotID int not null, 
`# of Plants` int not null
);
alter table `Current Peppers`
add constraint fk_PepperID_CP foreign key (PepperID)
references `Pepper Archive`(PepperID);

create table Suppliers (
supplierID int not null primary key,
Name varchar(100) not null, 
ContactName varchar(50),
Phone char(10) not null,
Email varchar(100)
);
create table MerchType (
TypeID char(5) not null primary key, 
Description varchar (50) not null, 
SupplierID int 
);
alter table MerchType
add constraint fk_SupplierID_MT foreign key (SupplierID)
references Suppliers(SupplierID);

create table Ingredients (
IngID Char(5) not null primary key, 
Title varchar(30) not null, 
SupplierID int
);
alter table Ingredients 
add constraint fk_SupplierID_ING foreign key (SupplierID)
references Suppliers(SupplierID);

create table `GFY Spice Level` (
GFYID int not null primary key,
Title varchar (30) not null 
);
create table Merch(
MerchID int auto_increment not null primary key,
TypeID char(5) not null, 
Title Varchar(100) not null, 
Description Varchar(100),
Price decimal(15,2) not null, 
Stock int not null, 
`Last Updated` date not null
);
alter table Merch
add constraint fk_TypeID foreign key (TypeID)
references MerchType(TypeID);

create table Employees(
EmployeeID int not null primary key,
JobTitle varchar(30) not null,
FirstName varchar(20) not null, 
LastName varchar(30) not null
);
Create table Customers(
CustomerID char(7) not null primary key,
Name varchar(50) not null, 
Address Varchar(100), 
City varchar (30),
State char(2)
);
create table FoodProducts(
FoodID int not null primary key,
Name varchar(25) not null, 
Description varchar(100) not null,
BasePepper Varchar(5), 
BaseIngredient char(5),
GFYID int not null, 
Price decimal(15,2) not null, 
Stock int not null, 
LastUpdated date not null
);
alter table FoodProducts
add constraint fk_BasePepper foreign key (BasePepper)
references `Pepper Archive`(PepperID);

alter table FoodProducts
add constraint fk_BaseIngredient foreign key (BaseIngredient)
references Ingredients(IngID);

alter table FoodProducts
add constraint fk_GFYID foreign key (GFYID)
references `GFY Spice Level`(GFYID);

create table Orders(
TransactionNumber int auto_increment not null primary key,
OrderID int not null, 
CustomerID char(7) not null, 
FoodID Char(5), 
MerchID int, 
Quantity int not null, 
PurchaseDate date not null, 
EmployeeID int not null
);
alter table Orders
add constraint fk_CustomerID foreign key (CustomerID)
references Customers(CustomerID);

alter table Orders
add constraint fk_MerchID foreign key (MerchID)
references Merch(MerchID);

alter table Orders
add constraint fk_EmployeeID foreign key (EmployeeID)
references Employees(EmployeeID);

insert into Customers 
values
('FRMR001', 'Canton Farmers Market','305 McKinley Ave NW', 'Canton','OH'),
('FRMR002','Green Farmers Market', '1755 Town Park Blvd',	'Green','OH'),
('FRMR003', 'Jackson Farmers Market', '5735 Wales Avenue, NW','Massillon','OH'), 
('CUST001', 'Joe Villers', '3287 Milport Ave', 'Canton','OH'), 
('CUST002', 'Mike James', '4598 Heights ST', 'Canton', 'OH'),
('CUST003', 'Slick Willy', '1256 Sleek St', 'Canton', 'OH'), 
('CUST004', 'Brent Meyers', '2487 Hun Ave', 'Canton', 'OH');
select * from Customers;

insert into Suppliers
values 
(1, 'Garys Produce', 'Gary Philbin', '3307860192', 'Garebear@gmail.com'),
(2, 'Barrys Bees', 	'Barry Bee Benson', 3301567987, 'b33M0Vi3@Yahoo.com'),
(3, 'Spicy Jared', 'Jared Jet', 7413511687, 'Jared@gmail.com'), 
(4, 'Jessicas True Heat', 'Jessica Simp', 4401253654, 'JessicaS@Gmail.com'),
(5, 'Absolute Fire', 'Dasani Bot', 9875215631, 'Disappointment@gmail.com');
select * from Suppliers;

insert into MerchType
values 
('AP001', 'T-Shirt', 5),
('AP002', 'Hoodie', 5),
('AP003', 'Hat', 5),
('ST001', 'Tech Sticker', 5),
('ST002', 'Window Sticker', 5);
select * from MerchType;

insert into Merch(TypeID, Title, Description, Price, Stock, `Last Updated`)
Values 
('AP001', 'Logo Pocket Tee', 'T-Shirt with the logo on the pocket', 10, 35, '2020-09-21'),
('AP002', 'Fleece Hoodie', 'Fleece hoodie with large logo on the back', 25, 20, '2020-09-23'),
('AP003', 'Feel the Warmth Beanie', 'GFY logo and Feel the warmth on beanie', 12, 15, '2020-02-18'),
('ST001', 'Logo sticker', 'GFY logo Phone sticker', 5, 50, '2020-09-24'),
('ST002', 'Logo Windshield sticker', 'Logo Sticker for windshields', 8, 30, '2020-09-19');
Select * from Merch;

insert into Plots
Values
(1, '5x6', 20),
(2, '5x6', 20),
(3, '5x6', 20),
(4, '6x6', 24),
(5, '6x6', 24);
Select * from Plots;

insert into `GFY Spice Level`
Values
(1, 'Was there a tingle?'),
(2, 'A good burn'),
(3, 'I need a Kleenex'),
(4, 'Oh god dont touch your eyes'), 
(5, 'Death Awaits');
select * from `GFY Spice Level`;

insert into `Pepper Archive`
Values
('GPS', 'Ghost Peach Scorpion', '900,000', 3, 2020), 
('GJ', 'Ghostly Jalepeno', '225,000', 3, 2020), 
('SB', 'Scotch Bonnet',	'225,000', 4, 2020), 
('G', 'Ghost Pepper', '1,041,427', 4, 2020),
('J', 'Jalapeno', '5,250', 4, 2020);

Select * from `Pepper Archive`;

insert into `Current Peppers`
values
('J', 1, 10), 
('GJ', 1, 10),
('SB', 2, 10), 
('GPS', 2, 10), 
('G', 3, 10);
Select * from `Current Peppers`;

insert into Ingredients
values
('VEG01', 'Carrot', 1), 
('VEG02', 'Garlic', 1), 
('VEG03', 'Onion', 1), 
('MSC01', 'Honey', 2);

insert into FoodProducts
values
(1, 'Sauce #1', 'First Sauce', 'SB', 'VEG01', 2, 10, 15, '2020-09-19'), 
(2, 'Jalepeno Sauce', 'Its a sauce', 'J', 'VEG03', 2, 10, 4, '2020-09-20'),
(3, 'Extra Hot sauce', 'Hot Sauce', 'GPS', 'VEG01', 3, 10, 12, '2020-09-21'),
(4, 'Spicy Garlic sauce', 'Garlicy hot sauce', 'GJ', 'VEG02', 2, 10, 17, '2020-09-22'), 
(5, 'Spicy Honey', 'hot honey', 'GPS', 'MSC01', 2, 15, 6, '2020-09-23');
select * from FoodProducts;

insert into Employees
values
(1, 'CEO', 'Chris Denmark', '70,000'),
(2, 'Chef', 'Nick Gay', '65,000'), 
(3, 'Graphic Designer', 'Quincy Ray','60,000'),
(4, 'Sales Rep', 'Janice Johnson', '45,000'), 
(5, 'Sales Rep', 'Charles Nixon', '45,000');

insert into Orders (OrderID, CustomerID, FoodID, Quantity, PurchaseDate, EmployeeID)
values
(1,'FRMR001', 3, 20, '2020-09-20', 4), 
(1,'FRMR001', 2, 32, '2020-09-20', 3),
(1,'FRMR001', 5, 10, '2020-09-20', 4);

insert into Orders (OrderID, CustomerID, MerchID, Quantity, PurchaseDate, EmployeeID)
values
(1,'FRMR001', 1, 6, '2020-09-20', 3),
(1,'FRMR001', 4, 8, '2020-09-20', 4);
select * from Orders
