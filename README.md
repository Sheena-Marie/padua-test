# The Process

Being a person that had studied Ruby and Ruby on Rails and never having learnt PHP before beginning this challenge, I first had to learn enough to complete it, or complete as much of it as I could before the due date. I had previously bought some courses in PHP through Udemy and narrowed it down to one course, [PHP for Beginners by Edwin Diaz](https://www.udemy.com/php-for-complete-beginners-includes-msql-object-oriented/learn/v4/overview).

## 21 December - 24 December

This was the main period that I spend studying PHP. I worked my way through functions, variable & scopes, returning values from functions, loops, working with databases (mySQL using Apache, Xampp, and myPHPAdmin).

I then moved on to classes, sessions, cookies and how to set them up, the POST and GET super global. A bit was covered on encryption, refactoring to make it easier to read by using what I know of as partials in Ruby on Rails.

The final day dedicated to studying PHP was focused on dealing with files: reading, writing, deleting, creating, and opening them.

The repository with all of my practice files from this learning period can be found in my [php-for-beginners](https://github.com/Sheena-Marie/php-for-beginners) repository.

## 25 December

One day was spent testing what I had learnt to see whether I could at least read a csv file and print the contents to the screen. Results of this can be found in my [csv-parsing-tests](https://github.com/Sheena-Marie/csv_parsing_tests) repository.

During this testing period, I found a handy PHP library which was designed to parse csvs for you without you having to write all of you code. I didn't end up using it in the actual coding challenge, but it looked very helpful:

[parseCSV](https://github.com/parsecsv/parsecsv-for-php)

## 26 December - 29 December

The first thing I made was the page where you upload the csv. Originally I had a connection to a database, but re-read through the task and realised that I didn't need it, so it was removed. I'm importing bootstrap externally through a link, so I placed the bootstrap links on a separate php page and added:
```php
<?php include 'bootstrap.php'; ?>
```
to keep the code clean and easier to read. Ruby on Rails is a very strong supporter of keeping your code DRY, so I am in the practice of always looking for elements that I can put into partials that can be used in multiple areas.

I spent some time on StackOverflow trying to work out how to put the csv data on the screen into a table. I found a solution that was a possibility, and spent the next few days wrangling it to get it to work the way I wanted to.

Originally, what I was getting was something like this:

| $HeaderColumn    | $HeaderColumn    | $HeaderColumn  |
| :------------    | :------------    | :-----------   |
| $column          | $column          | $column        |

I counted how many headers, columns, and rows were in the supplied csv, it matched exactly to the $HeaderColumn/$column table that was printing on my screen, so the code was obviously reading what was in there and printing something to the screen, but it wasn't telling me what the actual data was. It took some time, but I finally found where the problem was.

My original code read like this:
```php
<?php
// code for table header here  

echo '<th>$HeaderColumn</th>';

// code for the columns here
echo '<td>$column</td>';
?>
```
What finally fixed the problem was concatenating those two lines to look like this:
```php
<?php  
// code for the table header here
echo '<th>' . $HeaderColumn . '</th>';

// code for the table columns here
echo '<td>' . $column . '</td>';
?>
```
I spent some time trying to figure out how to filter the data by date, but ended up getting frustrated and hitting multiple dead ends over a couple of days, so switched track to styling, which I enjoy, and documentation so that I could come back to it with fresh eyes after a break.

I used [Paletton](http://www.paletton.com/#uid=53H0u0k6jvH0PTk35HkaprbfkmK) to decide colours on the page and spent quite a bit of time troubleshooting how to get the css to link up to the page with PHP.

## 30 December

Spent the day trying to get the _'Amount'_ column to show as currency with varied success. I've commented out the code that I have right as it's not working correctly and throwing error messages.

Still no success with getting the sort by date to work. I've got some commented out code in that section where I was trialling SQL queries using `mysqli_query`.

At one point in the afternoon, I realised that I hadn't taken into account what would happen if a user hit the upload button without actually selecting a file to upload. I did some searching through the [PHP documentation](http://php.net/manual/en/) and found `UPLOAD_ERR_NO_FILE` which seemed to be what I was looking for. I wrapped what I originally had in an if/else statement and had the code `die` if there wasn't anything there giving a message reminding the user to add a file before upload.
