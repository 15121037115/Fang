<?php
//当前有一个test数据库,有学生表stu表,班级表class表,城市表city表,邮编表code表,商品表goods表.请答题前,根据所回答题目查看表结构及数据

//1.连接msyql数据库,并使用test数据库,查看当前数据库中所有表 .
//mysql -uroot -proot
//2.将班级表class表中的classname字段修改成 cname char(15);
//  alter table class change classname cname char(15);
//3.将学生表stu表中的name字段的字段类型修改成varchar(10);
//alter table stu modify name varchar(10);
//4.将stu表中小花的所在班级id改成2;
//update stu set cid = 2 where name = '小花';
//5.删除班级表class表中班级名称不包含'后盾'的数据
//delete from class where cname not like '%后盾%';
//6.向学生表stu表中插入一条自己名字的数据,并且所属班级id为3
//insert into stu set name='李东英',sex='男',cid=3;
//7.找出学生表stu表中所有班级id为2的女同学数据
//select * from stu where sex='女' and cid=2;
//8.找出学生表stu表中所属班级id为1和2的数据
//select* from stu where cid=1 or cid=2;
//select* from stu where cid in (1,2);
//9.复制stu表的表结构和数据,新表的表名叫student
//create table student select * from stu;
//10.删除学生表stu表中的字段sid的主键属性
//alter table stu modify sid int(10);
//alter table stu drop primary key;
//11.统计出学生表stu表中的所有数据
//select count(*) from stu;
//12.找出商品表goods表中最贵的商品数据(要求该商品所有字段, 不是只要价格)
//select * from goods order by price desc limit 1;
//13.找出商品表goods表中价格第二便宜的商品名称(只要商品名称, 不需要全部数据)
//select gname from goods order by price asc limit(1,1);
//14.计算出商品表goods表中的商品平均价格
// select avg(price) from goods;
//15.找出商品表goods表中价格大于10小于4000的商品数据
//  select * from goods where price > 10 and price < 4000;
//16.获取城市表city表中每个城市的邮编(要求取出city表的cname字段,code表的code字段)
//  select * from city inner join code on city.cid = code.id;
//17.找出和小明一个班的女同学数据
//select * from stu as s1 join stu as s2 on s1.cid = s2.cid where s1.name = '小明' and s2.sex = '女';
//18.删除班级id为3的学生  数据
//delete from stu where cid = 3;













