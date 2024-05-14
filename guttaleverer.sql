-- Disable foreign key checks to avoid errors during table dropping
SET FOREIGN_KEY_CHECKS = 0;

-- Re-enable foreign key checks
SET FOREIGN_KEY_CHECKS = 1;

-- Create new database if not already existing (optional)
CREATE DATABASE IF NOT EXISTS guttaleverer;
USE guttaleverer;

-- Drop existing tables if they exist
DROP TABLE IF EXISTS CartItems, OrderItems, Orders, Employees, Products, Stores, Customers;




-- Recreate the users table
CREATE TABLE IF NOT EXISTS Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) UNIQUE NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Address TEXT
);

SHOW TABLES;


-- Continue with other table creations and SQL commands


-- Create Stores table
CREATE TABLE IF NOT EXISTS Stores (
    StoreID CHAR(1) PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Location TEXT NOT NULL,
    Phone VARCHAR(15)
);

-- Populate Stores table
INSERT INTO Stores (StoreID, Name, Location) VALUES
('K', 'Kiwi', 'Location K'),
('M', 'Meny', 'Location M'),
('R', 'Rema 1000', 'Location R');

-- Create Products table with Quantity column
CREATE TABLE IF NOT EXISTS Products (
    ProductID VARCHAR(10) PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Description TEXT,
    Price DECIMAL(10, 2) NOT NULL CHECK (Price >= 0),
    Image VARCHAR(225),
    Category VARCHAR(100),
    StoreID CHAR(1) NOT NULL,
    Quantity INT NOT NULL DEFAULT 0,
    FOREIGN KEY (StoreID) REFERENCES Stores(StoreID)
);




SHOW TABLES LIKE 'Stores';


-- Insert products with unique store identifiers

-- Update the price of a product by its ProductID
UPDATE Products
SET Price = '100'
WHERE ProductID = 'K1';


UPDATE Products
SET Image = 'bilder/rundstykker.png'
WHERE ProductID = 'K9';

UPDATE Products
SET Name = 'Gutenfri Rundstykker'
WHERE ProductID = 'R9';


-- Annet category
INSERT INTO Products (ProductID, Name, Description, Price, Image, Category, StoreID, Quantity)
VALUES
('K1', 'Dopapir', 'High-quality toilet paper.', 70.00, 'bilder/dopapir.jpg', 'Annet', 'K', 10),
('M1', 'Dopapir', 'High-quality toilet paper.', 70.00, 'bilder/dopapir.jpg', 'Annet', 'M', 10),
('R1', 'Dopapir', 'High-quality toilet paper.', 70.00, 'bilder/dopapir.jpg', 'Annet', 'R', 10),
('K2', 'Tannbørste', 'Eco-friendly toothbrush.', 50.00, 'bilder/tannbørste.png', 'Annet', 'K', 10),
('M2', 'Tannbørste', 'Eco-friendly toothbrush.', 50.00, 'bilder/tannbørste.png', 'Annet', 'M', 10),
('R2', 'Tannbørste', 'Eco-friendly toothbrush.', 50.00, 'bilder/tannbørste.png', 'Annet', 'R', 10),
('K3', 'Omo', 'Effective laundry detergent.', 75.00, 'bilder/omo.jpg', 'Annet', 'K', 10),
('M3', 'Omo', 'Effective laundry detergent.', 75.00, 'bilder/omo.jpg', 'Annet', 'M', 10),
('R3', 'Omo', 'Effective laundry detergent.', 75.00, 'bilder/omo.jpg', 'Annet', 'R', 10),
('K4', 'Sjampo', 'Gentle hair shampoo.', 90.00, 'bilder/sjampo.png', 'Annet', 'K', 10),
('M4', 'Sjampo', 'Gentle hair shampoo.', 90.00, 'bilder/sjampo.png', 'Annet', 'M', 10),
('R4', 'Sjampo', 'Gentle hair shampoo.', 90.00, 'bilder/sjampo.png', 'Annet', 'R', 10),
('K5', 'Såpe', 'Organic hand soap.', 45.00, 'bilder/såpe.png', 'Annet', 'K', 10),
('M5', 'Såpe', 'Organic hand soap.', 45.00, 'bilder/såpe.png', 'Annet', 'M', 10),
('R5', 'Såpe', 'Organic hand soap.', 45.00, 'bilder/såpe.png', 'Annet', 'R', 10),
('K6', 'Kjøkkenpapir', 'Super absorbent kitchen towels.', 30.00, 'bilder/kjøkkenpapir.png', 'Annet', 'K', 10),
('M6', 'Kjøkkenpapir', 'Super absorbent kitchen towels.', 30.00, 'bilder/kjøkkenpapir.png', 'Annet', 'M', 10),
('R6', 'Kjøkkenpapir', 'Super absorbent kitchen towels.', 30.00, 'bilder/kjøkkenpapir.png', 'Annet', 'R', 10);

-- Bakkeri category
INSERT INTO Products (ProductID, Name, Description, Price, Image, Category, StoreID, Quantity)
VALUES
('K7', 'Baguetter', 'Oven-baked baguettes.', 50.00, 'bilder/baguett.png', 'Bakkeri', 'K', 10),
('M7', 'Baguetter', 'Oven-baked baguettes.', 50.00, 'bilder/baguett.png', 'Bakkeri', 'M', 10),
('R7', 'Baguetter', 'Oven-baked baguettes.', 50.00, 'bilder/baguett.png', 'Bakkeri', 'R', 10),
('K8', 'Boller', 'Fresh buns from the local bakery.', 40.00, 'bilder/boller.png', 'Bakkeri', 'K', 10),
('M8', 'Boller', 'Fresh buns from the local bakery.', 40.00, 'bilder/boller.png', 'Bakkeri', 'M', 10),
('R8', 'Boller', 'Fresh buns from the local bakery.', 40.00, 'bilder/boller.png', 'Bakkeri', 'R', 10),
('K9', 'GLutenfri Rundstykker', 'Frozen and gluten free.', 75.00, 'bilder/rundstykker.jpg', 'Bakkeri', 'K', 10),
('M9', 'GLutenfri Rundstykker', 'Frozen and gluten free.', 75.00, 'bilder/rundstykker.jpg', 'Bakkeri', 'M', 10),
('R9', 'GLutenfri Rundstykker', 'Frozen and gluten free.', 75.00, 'bilder/rundstykker.jpg', 'Bakkeri', 'R', 10),
('K10', 'Rundstykker', 'Frozen.', 100.00, 'bilder/rundstykker.jpg', 'Bakkeri', 'K', 10),
('M10', 'Rundstykker', 'Frozen.', 100.00, 'bilder/rundstykker.jpg', 'Bakkeri', 'M', 10),
('R10', 'Rundstykker', 'Frozen.', 100.00, 'bilder/rundstykker.jpg', 'Bakkeri', 'R', 10),
('K11', 'Lefser', 'Lefsegodt with butter.', 25.00, 'bilder/lefser.png', 'Bakkeri', 'K', 10),
('M11', 'Lefser', 'Lefsegodt with butter.', 25.00, 'bilder/lefser.png', 'Bakkeri', 'M', 10),
('R11', 'Lefser', 'Lefsegodt with butter.', 25.00, 'bilder/lefser.png', 'Bakkeri', 'R', 10),
('K12', 'Crossaint', 'Bake freshly at home.', 80.00, 'bilder/crossaint.jpg', 'Bakkeri', 'K', 10),
('M12', 'Crossaint', 'Bake freshly at home.', 80.00, 'bilder/crossaint.jpg', 'Bakkeri', 'M', 10),
('R12', 'Crossaint', 'Bake freshly at home.', 80.00, 'bilder/crossaint.jpg', 'Bakkeri', 'R', 10);

-- Godteri category
INSERT INTO Products (ProductID, Name, Description, Price, Image, Category, StoreID, Quantity)
VALUES
('K13', 'Sjokolade', 'worlds best chocolate!.', 45.00, 'bilder/sjokolade.png', 'Godteri', 'K', 10),
('M13', 'Sjokolade', 'worlds best chocolate!.', 45.00, 'bilder/sjokolade.png', 'Godteri', 'M', 10),
('R13', 'Sjokolade', 'worlds best chocolate!.', 45.00, 'bilder/sjokolade.png', 'Godteri', 'R', 10),
('K14', 'Chips', 'Sour cream and onion.', 35.00, 'bilder/chips.png', 'Godteri', 'K', 10),
('M14', 'Chips', 'Sour cream and onion.', 35.00, 'bilder/chips.png', 'Godteri', 'M', 10),
('R14', 'Chips', 'Sour cream and onion.', 35.00, 'bilder/chips.png', 'Godteri', 'R', 10),
('K15', 'Kjeks', 'Safari.', 75.00, 'bilder/kjeks.png', 'Godteri', 'K', 10),
('M15', 'Kjeks', 'Safari.', 75.00, 'bilder/kjeks.png', 'Godteri', 'M', 10),
('R15', 'Kjeks', 'Safari.', 75.00, 'bilder/kjeks.png', 'Godteri', 'R', 10),
('K16', 'Bilar', 'Swedish Cars.', 90.00, 'bilder/bilar.jpg', 'Godteri', 'K', 10),
('M16', 'Bilar', 'Swedish Cars.', 90.00, 'bilder/bilar.jpg', 'Godteri', 'M', 10),
('R16', 'Bilar', 'Swedish Cars.', 90.00, 'bilder/bilar.jpg', 'Godteri', 'R', 10),
('K17', 'Godt og Blandet', 'Sour Candy.', 45.00, 'bilder/minimix.jpg', 'Godteri', 'K', 10),
('M17', 'Godt og Blandet', 'Sour Candy.', 45.00, 'bilder/minimix.jpg', 'Godteri', 'M', 10),
('R17', 'Godt og Blandet', 'Sour Candy.', 45.00, 'bilder/minimix.jpg', 'Godteri', 'R', 10),
('K18', 'Kvik lunsj', 'Better than KitKat.', 30.00, 'bilder/kvik.jpg', 'Godteri', 'K', 10),
('M18', 'Kvik lunsj', 'Better than KitKat.', 30.00, 'bilder/kvik.jpg', 'Godteri', 'M', 10),
('R18', 'Kvik lunsj', 'Better than KitKat.', 30.00, 'bilder/kvik.jpg', 'Godteri', 'R', 10);

-- Meieri category
INSERT INTO Products (ProductID, Name, Description, Price, Image, Category, StoreID, Quantity)
VALUES
('K19', 'Ost', 'Delicat cheese.', 60.00, 'bilder/ost.png', 'Meieri', 'K', 10),
('M19', 'Ost', 'Delicat cheese.', 60.00, 'bilder/ost.png', 'Meieri', 'M', 10),
('R19', 'Ost', 'Delicat cheese.', 60.00, 'bilder/ost.png', 'Meieri', 'R', 10),
('K20', 'Smør', 'Organic butter.', 50.00, 'bilder/smør.png', 'Meieri', 'K', 10),
('M20', 'Smør', 'Organic butter.', 50.00, 'bilder/smør.png', 'Meieri', 'M', 10),
('R20', 'Smør', 'Organic butter.', 50.00, 'bilder/smør.png', 'Meieri', 'R', 10),
('K21', 'Yoghurt', 'Natural yoghurt.', 35.00, 'bilder/yoghurt.jpg', 'Meieri', 'K', 10),
('M21', 'Yoghurt', 'Natural yoghurt.', 35.00, 'bilder/yoghurt.jpg', 'Meieri', 'M', 10),
('R21', 'Yoghurt', 'Natural yoghurt.', 35.00, 'bilder/yoghurt.jpg', 'Meieri', 'R', 10),
('K22', 'Melange Butter', 'Baking Butter.', 90.00, 'bilder/melange.png', 'Meieri', 'K', 10),
('M22', 'Melange Butter', 'Baking Butter.', 90.00, 'bilder/melange.png', 'Meieri', 'M', 10),
('R22', 'Melange Butter', 'Baking Butter.', 90.00, 'bilder/melange.png', 'Meieri', 'R', 10),
('K23', 'Vegan cheese', 'Go vegan.', 45.00, 'bilder/vegansk.png', 'Meieri', 'K', 10),
('M23', 'Vegan cheese', 'Go vegan.', 45.00, 'bilder/vegansk.png', 'Meieri', 'M', 10),
('R23', 'Vegan cheese', 'Go vegan.', 45.00, 'bilder/vegansk.png', 'Meieri', 'R', 10),
('K24', 'Melk', 'Fresh Milk.', 30.00, 'bilder/Meieri.png', 'Meieri', 'K', 10),
('M24', 'Melk', 'Fresh Milk.', 30.00, 'bilder/Meieri.png', 'Meieri', 'M', 10),
('R24', 'Melk', 'Fresh Milk.', 30.00, 'bilder/Meieri.png', 'Meieri', 'R', 10);

-- Drikke category
INSERT INTO Products (ProductID, Name, Description, Price, Image, Category, StoreID, Quantity)
VALUES
('K25', 'Coca Cola', 'Zero.', 28.00, 'bilder/cola.png', 'Drikke', 'K', 10),
('M25', 'Coca Cola', 'Zero.', 28.00, 'bilder/cola.png', 'Drikke', 'M', 10),
('R25', 'Coca Cola', 'Zero.', 28.00, 'bilder/cola.png', 'Drikke', 'R', 10),
('K26', 'Fanta', 'Orange.', 29.00, 'bilder/fanta.png', 'Drikke', 'K', 10),
('M26', 'Fanta', 'Orange.', 29.00, 'bilder/fanta.png', 'Drikke', 'M', 10),
('R26', 'Fanta', 'Orange.', 29.00, 'bilder/fanta.png', 'Drikke', 'R', 10),
('K27', 'Juice', 'Apple and Mango.', 35.00, 'bilder/juice.png', 'Drikke', 'K', 10),
('M27', 'Juice', 'Apple and Mango.', 35.00, 'bilder/juice.png', 'Drikke', 'M', 10),
('R27', 'Juice', 'Apple and Mango.', 35.00, 'bilder/juice.png', 'Drikke', 'R', 10),
('K28', 'Urge', 'Original.', 27.00, 'bilder/urge.png', 'Drikke', 'K', 10),
('M28', 'Urge', 'Original.', 27.00, 'bilder/urge.png', 'Drikke', 'M', 10),
('R28', 'Urge', 'Original.', 27.00, 'bilder/urge.png', 'Drikke', 'R', 10),
('K29', 'Battery', 'Jucied.', 35.00, 'bilder/battery.png', 'Drikke', 'K', 10),
('M29', 'Battery', 'Jucied.', 35.00, 'bilder/battery.png', 'Drikke', 'M', 10),
('R29', 'Battery', 'Jucied.', 35.00, 'bilder/battery.png', 'Drikke', 'R', 10),
('K30', 'Imsdal', '0,5L.', 19.00, 'bilder/Imsdal.png', 'Drikke', 'K', 10),
('M30', 'Imsdal', '0,5L.', 19.00, 'bilder/Imsdal.png', 'Drikke', 'M', 10),
('R30', 'Imsdal', '0,5L.', 19.00, 'bilder/Imsdal.png', 'Drikke', 'R', 10);

-- Kjøtt category
INSERT INTO Products (ProductID, Name, Description, Price, Image, Category, StoreID, Quantity)
VALUES
('K31', 'Skinke', 'Real cooked ham.', 35.00, 'bilder/skinke.jpg', 'Kjøtt', 'K', 10),
('M31', 'Skinke', 'Real cooked ham.', 35.00, 'bilder/skinke.jpg', 'Kjøtt', 'M', 10),
('R31', 'Skinke', 'Real cooked ham.', 35.00, 'bilder/skinke.jpg', 'Kjøtt', 'R', 10),
('K32', 'KrydretSkinke', 'Real seasoned ham.', 38.00, 'bilder/krydret skinke.jpg', 'Kjøtt', 'K', 10),
('M32', 'KrydretSkinke', 'Real seasoned ham.', 38.00, 'bilder/krydret skinke.jpg', 'Kjøtt', 'M', 10),
('R32', 'KrydretSkinke', 'Real seasoned ham.', 38.00, 'bilder/krydret skinke.jpg', 'Kjøtt', 'R', 10),
('K33', 'Hamburgerrygg', 'Leaf-Thin.', 50.00, 'bilder/hamburgerrygg.jpg', 'Kjøtt', 'K', 10),
('M33', 'Hamburgerrygg', 'Leaf-Thin.', 50.00, 'bilder/hamburgerrygg.jpg', 'Kjøtt', 'M', 10),
('R33', 'Hamburgerrygg', 'Leaf-Thin.', 50.00, 'bilder/hamburgerrygg.jpg', 'Kjøtt', 'R', 10),
('K34', 'Salami', 'Danish Salami.', 40.00, 'bilder/salami.jpg', 'Kjøtt', 'K', 10),
('M34', 'Salami', 'Danish Salami.', 40.00, 'bilder/salami.jpg', 'Kjøtt', 'M', 10),
('R34', 'Salami', 'Danish Salami.', 40.00, 'bilder/salami.jpg', 'Kjøtt', 'R', 10),
('K35', 'Svartpølse', 'Horse Sausage.', 39.00, 'bilder/hestp.jpg', 'Kjøtt', 'K', 10),
('M35', 'Svartpølse', 'Horse Sausage.', 39.00, 'bilder/hestp.jpg', 'Kjøtt', 'M', 10),
('R35', 'Svartpølse', 'Horse Sausage.', 39.00, 'bilder/hestp.jpg', 'Kjøtt', 'R', 10),
('K36', 'Spekeskinke', 'Cured ham.', 55.00, 'bilder/spekeskinke.jpg', 'Kjøtt', 'K', 10),
('M36', 'Spekeskinke', 'Cured ham.', 55.00, 'bilder/spekeskinke.jpg', 'Kjøtt', 'M', 10),
('R36', 'Spekeskinke', 'Cured ham.', 55.00, 'bilder/spekeskinke.jpg', 'Kjøtt', 'R', 10);

-- Create Customers table
CREATE TABLE IF NOT EXISTS Customers (
    CustomerID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) UNIQUE,
    Address TEXT
);


-- Create Orders table
CREATE TABLE IF NOT EXISTS Orders (
    OrderID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT,
    OrderDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    Total DECIMAL(10, 2) NOT NULL CHECK (Total >= 0),
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
);

-- Create CartItems table
CREATE TABLE IF NOT EXISTS CartItems (
    CartItemID INT AUTO_INCREMENT PRIMARY KEY,
    CustomerID INT,
    ProductID VARCHAR(10),
    Quantity INT NOT NULL CHECK (Quantity > 0),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

SELECT * FROM CartItems;


-- SQL safe updates to avoid accidental changes
SET SQL_SAFE_UPDATES = 1;

DELETE FROM Products;


