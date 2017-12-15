# Chapter 3 Review Questions
1. **What tag is used to cause PHP to start interpreting program code? And what is the short form of the tag?**
<br>*The tag used to start PHP interpreting code is ```<?php...?>```, which can be shortened to ```<?...?>``` but is not recommended practice.*<br><br>
2. **What are two types of comment tabs?**
<br>*You can use ```//``` for a single-line comment or ```/* */``` to span multiple lines.*<br><br>
3. **Which character must be placed at the end of each PHP statement?**
<br>*All PHP statements must end with a semicolon (;).*<br><br>
4. **Which symbol must be used to preface all PHP variables?**
<br>*With the exception of constants, all PHP variables must begin with ```$```*
5. **What can a variable store?**
<br>*Variables hold a value that can be a string, a number, or other data.*<br><br>
6. **What is the difference between $variable = 1 and $variable == 1?**
<br>*```$variable = 1``` is an assignment statement, whereas ```$variable == 1``` is a comparison operator. Use ```$variable = 1``` to set the value of ```$variable```. Use ```$variable == 1``` to find out later in the program whether ```$variable``` equals 1. If you mistakenly use ```$variable = 1``` where you meant to do a comparison, it will do two things you probably don't want: set ```$variable``` to ```1``` and return a ```true``` value all the time, no matter what its previous value was.*<br><br>
7. **Why do you suppose that an underscore is allowed in variable names ($current_user) whereas, hyphens are not ($current-user)?**
<br>*A hyphen is reserved for the subtraction operators. A construct like ```$current-user``` would be harder to interpret if hyphens were also allowed in variable names and, in any case, would lead programs to be ambiguous.*<br><br>
8. **Are variable names case sensitive?**
<br>*Variable names are case-sensitive. ```$This_Variable``` is not the same as ```$this_variable```.*<br><br>
9. **Can you use spaces in variable names?**
<br>*You cannot use spaces in variable names, as this would confuse the PHP parser. Instead, try using the _ (underscore).*<br><br>
10. **How do you convert on variable type to another (say, a string to a number)?**
<br>*To convert one variable type to another, reference it and PHP will automatically convert it for you.*<br><br>
11. **What is the difference between ++$j and $j++?**
<br>*There is no difference between ```++$j``` and ```$j++``` unless the value of ```$j``` is being tested, assigned to another variable, or passed as a parameter to a function. In such cases, ```++$j``` increments ```$j``` before the test or other operation is performed, whereas ```$j++``` performs the operation and then increments ```$j```.*<br><br>
12. **Are the operators && and (and) interchangeable?**
<br>*Generally, the operators ```&&``` and ```and``` are interchangeable except where precedence is important, in which case ```&&``` has a high precedence, while ```and``` has a low one.*<br><br>
13. **How can you create a multiline (echo) or assignment?**
<br>*italic*<br><br>
14. **Can you redefine a constant?**
<br>*italic*<br><br>
15. **How do you escape a quotation mark?**
<br>*italic*<br><br>
16. **What is the difference between the (echo) and (print) commands?**
<br>*italic*<br><br>
17. **What is the purpose of functions?**
<br>*italic*<br><br>
18. **How can you make a variable accessible to all parts of a PHP program?**
<br>*italic*<br><br>
19. **If you generate data within a function, what are a couple of ways to convey the data to the rest of the program?**
<br>*italic*<br><br>
20. **What is the result of combining a string with a number?**
<br>*italic*<br><br>
