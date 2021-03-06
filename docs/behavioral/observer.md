# Observer（观察者模式）

### 意图
定义对象间的一种已一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并自动更新。

### 别名
依赖（Dependents）。发布-订阅（Publish-Subscribe）。

### 适用场景
在以下任意情况之一可以各自独立地改变和实现。
* 当一个抽象模型有两个方面，其中一个方面依赖于另一个方面，将这二者封装在各自对立的对象中以使他们可以各自独立的改变和复用。
* 当一个对象的改变需要同时改变其他对象，而不知道具体有多少对象有待改变。
* 当一个对象必须通知其他对象，而它又不能假定其他对象是谁。换言之，你不希望这些对象是紧密耦合的。

### 实现
php 官方扩展库提供了相关的接口，如 SplSubject，SplObserver 和 SplObserverStorage。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/Observer)

### UML类图
![observer](http://static.alitain.tech/dp_observer.png)