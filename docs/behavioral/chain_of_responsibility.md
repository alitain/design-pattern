# Chain of Responsibility（职责链模式）

### 定义
使多个对象都有机会处理请求，从而避免请求的发送者和接受者之间的耦合关系。将这些对象连成一条链，并沿着这条链传递该请求，直到有一个对象处理它为止。

### 适用性
在以下条件下使用 Responsibility 链：
* 有多个对象可以处理一个请求，哪个对象处理该请求运行时自动确定。
* 你想在不明确指定接收者的情况下，向多个对象中的一个提交一个请求。
* 可处理一个请求的对象集合应被动态指定。

### 已知应用
* Yii2 框架中的 ActionFilter可以看作是职责链的一种实现。外部请求过来，需要经过一些系列的 Filter，直到其中有一个 Filter返回错误，或者所有的 Filter都返回正确则由 Action来处理请求。

### 实现
我们采取类似 Yii框架中的 Filter实现方式，假设某个功能我们只接受 POST请求，当有 GET等其它请过过来时，会向用户抛出异常。最后处理请求。

### UML类图
![chain_of_responsibility](http://ohtd7tndv.bkt.clouddn.com/chain_of_responsibility.png)

### 参与者
* `AbstractHandler` 抽象处理者，内部定义了当存在下一个继任者的时候，会自动调用继任者的处理方法。
* `PostRequestOnlyHandler` POST请求检查者，当检查到请求方法不为 POST 时，抛出异常。
* `RequestHandler` 请求处理者，默认作为最后的请求处理者。
* `Request` 模拟的请求对象。

### 相关模式
* Chain of Responsibility（职责链模式）与 Composite（组合模式）一起使用。在这种情况下，一个构件的父构件可作为它的后继。