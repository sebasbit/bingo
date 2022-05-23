# bingo
A simple website to play Bingo developed with PHP using Symfony Framework. This project is based on [Bingo Baker](https://bingobaker.com), we could consider it a clone just for practicing.

## Requirements
To track my advance I'll write a list of requirements divided into four sections: **Bingo creator**, **Game view**, **Card view**, and **I don't know how to classify this**.

### Bingo creator
| Done | Requirement |
| ---- | ----------- |
|      | The user must log in to create new Bingo, otherwise the system must prompt the user to do so |
|      | The user must write the name of the Bingo, then it will be created |
|      | The system should redirect to the edit page after creating a new Bingo |
|      | The edit page should print the name of the Bingo, a card with the word Bingo at the top, a 5x5 grid, and an option to add or remove additional cells |
|      | Each cell should be editable, and the user should be able to change its content |
|      | The user should be able to change the font color, background color, and the free space image on the Bingo card |
|      | Each change must be saved after done (sending a request with the change to an endpoint), and it must be displayed immediately |
|      | The user may delete (soft delete) a Bingo after confirming his choice |
|      | The user may share a link to the Bingo after adding content to all the cells in the grid (24 cells) |
|      | The user may clone a Bingo and edit it |

### Game view
| Done | Requirement |
| ---- | ----------- |
|      | The system must pick a random value from the list of available values in the Bingo |
|      | The system must save the value after picking it |
|      | The system must not pick a value more than once |
|      | The system must display the list of selected values |
|      | Each change must be saved after done (for each selected value, mark it as such) |
|      | The user may reset the game, no values selected, and shuffle the options |

### Play view
| Done | Requirement |
| ---- | ----------- |
|      | An unregistered user may create a card for a Bingo, but it will be assigned by default to the Guest user |
|      | A card assigned to a Guest user may be edited by anyone with the link |
|      | The user may create a card for a Bingo, and it will be assigned to him |
|      | A card assigned to a user must be edited by him and no one else |
|      | The system must print a Bingo card like on the Bingo creator page |
|      | The user may pick a Bingo marker. The options should be a pebble, a corn kernel, or a button |
|      | If the user changes the Bingo marker, the system should update the marked cells and save the new Bingo marker |
|      | If the user clicks an unmarked cell, the system must mark it and save the change |
|      | If the user clicks a marked cell, the system must remove the mark and save the change |
|      | Each change must be saved after done |
|      | The user may reset the game. Any cells should be marked |
|      | The user may share a link to his Bingo card |
|      | The user may delete (soft delete) a Bingo card |

### I don't know how to classify this
| Done | Requirement |
| ---- | ----------- |
|      | The index page should have four links to explore, create, play, and about pages |
|      | The system must implement Symfony Login and Register, including email confirmation |
|      | The website should have a static navbar with four links to explore, create, play, and about pages |
|      | The system must implement an apiKey authentication |
|      | The Gest and Content-Creator users must be created by default |
|      | An unregistered user must be logged in as a Guest user by default |
|      | All Bingo provided by the system must belong to the Content-Creator user |
|      | The user must have an email and a picture. The picture should be the only editable field |
|      | The user profile page should display his Bingo, cards, and games and the options to edit them |

## Views
This website has around 10 views, [here are the mockups](./mockups.png) for each view.