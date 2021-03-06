# Command（命令模式）

### 意图
将请求封装成一个对象，从而是你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤销的操作。

### 别名
动作（Action）。事务（Transaction）。

### 适用场景
当你有如下需求时，可使用Command模式：
* Command模式是回调机制的一个面向对象的替代品。所以用到回调机制的地方可以考虑使用。
* 在不同的时刻指定、排列和执行请求。一个Command对象可以有一个与初始请求无关的生存期。
* 支持取消和重做操作。Command的Execute操作可在实施操作前将状态存储起来，在取消操作时取消上一次Execute的结果。
* 支持修改日志，这样当系统崩溃时，这些修改可以被重做一遍。
* 用构建在原语操作上的高层操作构建一个系统。这样一种结构在支持事务的信息系统中很常见。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/Command)

### UML类图
![command](http://static.alitain.tech/dp_command.png)