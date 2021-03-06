# Interpreter（解释器模式）

### 意图
给定一个语言，定义它的文法的一种表示，并定一个解释器，这个解释器使用该表达式来解释语言中的句子。

### 适用性
当有一个语言需要解释执行，并且你可将该语言中的句子表示为一个抽象语法数时，可使用解释器模式。而当存在以下情况时该模式效果最好：
* 该文法简单对于复杂的文法，文法的类层次变大庞大而无法管理。此时语法分析程序生成器这样的工具是更好的选择。
* 效率不是一个关键问题最高效的解释器通常不是通过直接解析语法分析树实现的，而是首先将他们转换成另一种形式。

### 实现
我们实现一个简单的字符串语法，表达式为('a & b | c', str)，表明str中需含有a和b，或包含c。

### 代码
[Github](https://github.com/alitain/design-pattern/tree/master/src/Behavioral/Interpreter)

### UML类图
![interpreter](http://static.alitain.tech/dp_interpreter.png)

### 参与者
* `AbstractExpression` 抽象表达式，声明一个抽象的解释操作，这个接口为抽象语法树中所有的节点共享。
* `InExpression` 子串是否存在文本中
* `AndExpression` 与表达式
* `OrExpression` 或表达式
* `Expression` 表达式，由解析表达式，并用 in, and, or表达式解析

### 相关模式
* [Composite （组合）](https://github.com/alitain/design-pattern/blob/master/docs/structural/composite.md)模式：抽象语法书树是一个复杂模式的实例。
* [FlyWeight （享元）](https://github.com/alitain/design-pattern/blob/master/docs/structural/flyweight.md)模式：说明了如何在抽象语法树中共享终结符。
* [Iterator （迭代器）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/iterator.md)模式：解释器可用一个迭代器遍历该结构。
* [Visitor （访问者）](https://github.com/alitain/design-pattern/blob/master/docs/behavioral/visitor.md)模式：可用来在一个类中维护抽象语法树种的各个节点的行为。