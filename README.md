Before you start:
=================

 

    Try not to read ahead.
    Do one task at a time. The trick is to learn to work incrementally.
    Make sure you only test for correct inputs. there is no need to test for invalid inputs for this kata

 

String Calculator
=================

    1) Create a simple String calculator with a method int Add(string numbers)
        a) The method can take 0, 1 or 2 numbers, and will return their sum (for an empty string it will return 0) for example “” or “1” or “1,2”
        b) Start with the simplest test case of an empty string and move to 1 and two numbers
        c) Remember to solve things as simply as possible so that you force yourself to write tests you did not think about
        d) Remember to refactor after each passing test
    2) Allow the Add method to handle an unknown amount of numbers
    3) Allow the Add method to handle new lines between numbers (instead of commas).
        a) the following input is ok:  “1\n2,3”  (will equal 6)
        b) the following input is NOT ok:  “1,\n” (not need to prove it - just clarifying)
