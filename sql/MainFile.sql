drop DATABASE OnlineShopping;
CREATE DATABASE OnlineShopping;
USE OnlineShopping ;

CREATE TABLE OnlineShopping.Employee (
  `EmployeeId` CHAR(5) NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Salary` INT NULL,
  `Role` VARCHAR(45) NULL,
  `Manager` CHAR(5) NULL,
  PRIMARY KEY (`EmployeeId`),
  INDEX `fk_Employee_Employee1_idx` (`Manager` ASC),
  CONSTRAINT `fk_Employee_Employee1`
    FOREIGN KEY (`Manager`)
    REFERENCES `OnlineShopping`.`Employee` (`EmployeeId`)
    ON DELETE SET NULL
    ON UPDATE CASCADE);

CREATE TABLE OnlineShopping.Customer (
  `CustomerId` CHAR(6) NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Email` VARCHAR(30) NULL,
  `Phone Number` CHAR(11) NULL,
  `Score` INT NULL,
  `Address` VARCHAR(45) NULL,
  `EmployeeId` CHAR(5) NULL,
  PRIMARY KEY (`CustomerId`),
  INDEX `fk_Customer_Employee1_idx` (`EmployeeId` ASC),
  CONSTRAINT `fk_Customer_Employee1`
    FOREIGN KEY (`EmployeeId`)
    REFERENCES `OnlineShopping`.`Employee` (`EmployeeId`)
    ON DELETE SET NULL
    ON UPDATE CASCADE);

CREATE TABLE OnlineShopping.Order (
  `OrderId` CHAR(9) NOT NULL,
  `Date` DATE NULL,
  `Status` VARCHAR(45) NULL,
  `CustomerId` CHAR(6) NULL,
  `EmployeeId` CHAR(5) NULL,
  PRIMARY KEY (`OrderId`),
  INDEX `fk_Order_Customer_idx` (`CustomerId` ASC),
  INDEX `fk_Order_Employee1_idx` (`EmployeeId` ASC),
  CONSTRAINT `fk_Order_Customer`
    FOREIGN KEY (`CustomerId`)
    REFERENCES `OnlineShopping`.`Customer` (`CustomerId`)
    ON DELETE SET NULL
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Order_Employee1`
    FOREIGN KEY (`EmployeeId`)
    REFERENCES `OnlineShopping`.`Employee` (`EmployeeId`)
    ON DELETE SET NULL
    ON UPDATE CASCADE);

CREATE TABLE OnlineShopping.Supplier (
  `SupplierId` CHAR(4) NOT NULL,
  `Name` VARCHAR(45) NULL,
  PRIMARY KEY (`SupplierId`));

CREATE TABLE OnlineShopping.Product (
  `ProductId` CHAR(5) NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Price` INT NULL,
  `Quantity_in_stock` INT NULL,
  `SupplierId` CHAR(4) NULL,
  PRIMARY KEY (`ProductId`),
  INDEX `fk_Product_Supplier1_idx` (`SupplierId` ASC),
  CONSTRAINT `fk_Product_Supplier1`
    FOREIGN KEY (`SupplierId`)
    REFERENCES `OnlineShopping`.`Supplier` (`SupplierId`)
    ON DELETE SET NULL
    ON UPDATE CASCADE);

CREATE TABLE OnlineShopping.OrderInfo (
  `OrderInfoId` CHAR(11) NOT NULL,
  `Quantity` INT NULL,
  `OrderId` CHAR(9) NULL,
  `ProductId` CHAR(5) NULL,
  PRIMARY KEY (`OrderInfoId`),
  INDEX `fk_OrderInfo_Order1_idx` (`OrderId` ASC),
  INDEX `fk_OrderInfo_Product1_idx` (`ProductId` ASC),
  CONSTRAINT `fk_OrderInfo_Order1`
    FOREIGN KEY (`OrderId`)
    REFERENCES `OnlineShopping`.`Order` (`OrderId`)
    ON DELETE SET NULL
    ON UPDATE CASCADE,
  CONSTRAINT `fk_OrderInfo_Product1`
    FOREIGN KEY (`ProductId`)
    REFERENCES `OnlineShopping`.`Product` (`ProductId`)
    ON DELETE SET NULL
    ON UPDATE CASCADE);