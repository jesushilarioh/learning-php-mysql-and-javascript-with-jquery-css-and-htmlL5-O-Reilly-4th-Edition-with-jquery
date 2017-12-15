# Chapter 3 Review Questions
1. **What tag is used to cause PHP to start interpreting program code? And what is the short form of the tag?**
*The tag used to start PHP interpreting code is ```<?php...?>```, which can be shortened to ```<?...?>``` but is not recommended practice.*
2. **What are two types of comment tabs?**
*You can use ```//``` for a single-line comment or ```/* */``` to span multiple lines.*
3. **Which character must be placed at the end of each PHP statement?**
*All PHP statements must end with a semicolon (;).*
4. **Which symbol must be used to preface all PHP variables?**
*With the exception of constants, all PHP variables must begin with ```$```*
5. **What can a variable store?**
*Variables hold a value that can be a string, a number, or other data.*
6. **What is the difference between $variable = 1 and $variable == 1?**
*```$variable = 1``` is an assignment statement, whereas ```$variable == 1``` is a comparison operator. Use ```$variable = 1``` to set the value of ```$variable```. Use ```$variable == 1``` to find out later in the program whether ```$variable``` equals 1. If you mistakenly use ```$variable = 1``` where you meant to do a comparison, it will do two things you probably don't want: set ```$variable``` to ```1``` and return a ```true``` value all the time, no matter what its previous value was.*
7. **Why do you suppose that an underscore is allowed in variable names ($current_user) whereas, hyphens are not ($current-user)?**
*A hyphen is reserved for the subtraction operators. A construct like ```$current-user``` would be harder to interpret if hyphens were also allowed in variable names and, in any case, would lead programs to be ambiguous.*
8. **Are variable names case sensitive?**
*Variable names are case-sensitive. ```$This_Variable``` is not the same as ```$this_variable```.*
9. **Can you use spaces in variable names?**
**
10. **How to you convert on variable type to another (say, a string to a number)?**
**
11. **What is the difference between ++$j and $j++?**
**
12. **Are the operators && and (and) interchangeable?**
**
13. **How can you create a multiline (echo) or assignment?**
**
14. **Can you redefine a constant?**
**
15. **How do you escape a quotation mark?**
**
16. **What is the difference between the (echo) and (print) commands?**
**
17. **What is the purpose of functions?**
**
18. **How can you make a variable accessible to all parts of a PHP program?**
**
19. **If you generate data within a function, what are a couple of ways to convey the data to the rest of the program?**
**
20. **What is the result of combining a string with a number?**
**
