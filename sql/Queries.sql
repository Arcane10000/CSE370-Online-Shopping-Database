-- Most Sold
SELECT orderinfo.ProductId, Name, sum(Quantity) as Total_Quantity 
FROM onlineshopping.order, orderinfo, product 
where (onlineshopping.order.orderId=orderinfo.orderid and 
	orderinfo.ProductId=product.ProductId) 
group by orderinfo.ProductId 
order by Total_Quantity desc
limit 3;

-- Most Revenue
SELECT orderinfo.ProductId, product.Name, sum(Quantity*price) as Total_Revenue 
FROM onlineshopping.order, orderinfo, product 
where (onlineshopping.order.orderId=orderinfo.orderid and orderinfo.ProductId=product.ProductId) 
group by orderinfo.ProductId 
order by Total_Revenue desc
limit 3;

-- OrderInfo with price
SELECT OrderInfoId, Quantity, OrderId, orderinfo.ProductId, price FROM orderinfo, product 
where orderinfo.ProductId=product.ProductId;


-- Number of sub Orders by each customer
select Customer.name, sum(quantity) as Number_of_Suborders 
from Customer, onlineshopping.order, orderInfo 
where 
	(Customer.CustomerId=onlineshopping.order.CustomerId and 
    onlineshopping.order.OrderId=orderinfo.orderid) 
group by Customer.CustomerId 
order by Number_of_Suborders desc 
limit 3;

-- Number of orders by each customer
select Customer.name, count(*) as Number_of_Orders 
from Customer, onlineshopping.order 
where (Customer.CustomerId=onlineshopping.order.CustomerId) 
group by Customer.CustomerId;


-- Total_price simpler test
select onlineshopping.order.orderid, onlineshopping.order.date, onlineshopping.order.status, customerid, employeeid, sum(Quantity*price) as Total_Price 
from onlineshopping.order, orderinfo, product where (onlineshopping.order.OrderId=orderinfo.orderid and orderinfo.productid=product.productid)
group by onlineshopping.order.orderid;


-- Total_price Ignore
select onlineshopping.order.orderid, date, status, customerid, employeeid, sum(total_price) as total_price
from onlineshopping.order, (select onlineshopping.order.orderid, Quantity*price as Total_Price
	from onlineshopping.order, orderinfo, product
	where onlineshopping.order.OrderId=orderinfo.orderid
	and orderinfo.productid=product.productid) as orderInfoWithPrice
where onlineshopping.order.orderid = orderInfoWithPrice.orderid
group by onlineshopping.order.orderid;

    