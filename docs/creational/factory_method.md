# factory method（工厂方法模式）

### 意图
定义一个用户创建对象的接口，让子类决定实例化哪一个类。Factory Method 使一个类的实例化延迟到子类。

### 别名
虚拟构造器（Virtual Constructor）

### 适用场景
在以下任意情况可以使用 Factory Method 模式:
* 当一个类不知道它所必须创建的对象的类的时候。
* 当一个类希望由它的子类来指定它所创建的对象的时候。
* 当类将创建对象的职责委托给多个帮助子类中的某一个，并且你希望将哪一个帮组子类是代理这一信息局部化的时候。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Creational/FactoryMethod)

### UML类图
![factory_method](http://static.alitain.tech/dp_factory_method.png)