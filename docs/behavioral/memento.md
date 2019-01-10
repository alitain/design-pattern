# Memento（备忘录模式）

### 意图
在不破坏封装的前提下，捕获一个对象的内部状态，并在该对象之外保存这个状态。这样以后就可将该对象恢复到原先保存的状态。

### 别名
Token

### 适用性
在以下条件下使用备忘录模式：
* 必须保存一个对象在某一个时刻的（部分）状态，这样以后需要时她才能恢复到先前的状态。
* 如果一个用接口来让其它对象直接得到这些状态，将会暴露对象的实现细节并破坏对象的封装性。

### 实现
我们通过备忘录模式实现 undo 机制。每一次原发器对象的状态更新时，都将生成一个备忘录，并且保存下来。在适当的时候实现撤销操作。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/Memento)

### UML类图
![memento](http://static.alitain.tech/dp_memento.png)

### 参与者
* `Originator` 原发器，需要创建一个备忘录，用以记录当前时刻它的内部状态；使用备忘录恢复内部状态。
* `Memento` 备忘录存储原发器对象的内部状态；防止原发器以外的其他对象防止备忘录。备忘录实际上有两个接口，管理者智能看到备忘录的窄接口——它只能将备忘录传递给其他对象。相反，原发器可以看到一个宽接口，允许访问返回到它先前状态的所有数据。
* `Caretaker` 管理者，负责保存备忘录，实现撤销操作

### 相关模式
* [Command （命令）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/command.md)模式：命令可使用备忘录来作为可撤销的操作维护状态。