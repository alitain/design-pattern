# Iterator（迭代器模式）

### 意图
提供一种方法顺序访问一个聚合对象中各个元素，而又不需要暴露该对象的内部表示。

### 别名
游标（Cursor）

### 适用性
迭代器模式可用来：
* 访问一个聚合对象的内容而又无需暴露它的内部表示。
* 支持对聚合对象的多种遍历。
* 为遍历不同的聚合对象提供一个统一的接口。

### 实现
SPL 提供了统一的迭代器接口 Iterator，只需要实现这个接口我们创建出来一个可以迭代的对象。我们创建 Student这个类，同时创建 StudentList实现 Iterator的接口。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/Iterator)

### UML类图
![iterator](http://static.alitain.tech/dp_iterator.png)

### 参与者
* `Iterator` SPL 提供的统一迭代器接口
* `Countable` SPL 提供的可计量接口
* `Student` 学生类，有编号姓名等属性
* `StudentList` 学生列表，即学生的聚合对象

### 相关模式
* [Composite （组合）](https://github.com/alitain/design-pattern/blob/master/docs/structural/composite.md)模式：迭代器常被应用到像复合这样的递归结构上。
* [Factory Method （工厂方法）](https://github.com/alitain/design-pattern/blob/master/docs/creational/factory_method.md)模式：多台迭代器靠 Factory Method来实例化适当的迭代器子类。
* [Memento （备忘录）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/memento.md)模式常与迭代器模式一起使用。迭代器可使用一个 Memento来捕获一个迭代的状态。迭代器在其内部存储 Memento。