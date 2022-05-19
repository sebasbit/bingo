# bingo
A simple website to play Bingo developed with PHP using Symfony Framework. This project is based on [Bingo Baker](https://bingobaker.com), we could consider it a clone just for practicing.

## Requirements
In order to track my advance I'll write a list of requirements, these requirements are divided in 4 sections: **Bingo creator**, **Game view**, **Card view** and **I don't know how to classify this**.

### Bingo creator
| Done | Requirement |
| ---- | ----------- |
|      | The user must login to create a new Bingo, if not the system must prompt the user to do so |
|      | The user must write the name of the Bingo, then a new Bingo will be created |
|      | The system should redirect to edit page after creating a new Bingo |
|      | The edit page should print a the name of the Bingo, a card with the word Bingo at the top, a 5x5 grid and an option to add or remove additional cells |
|      | Each cell should be editable, the user should be able to change its content |
|      | The user should be able to change the font color, background color and the free space image on the Bingo card |
|      | Each change must be saved after done (sending a request with the change to an endpoint) and it must be displyed immediately |
|      | The user may delete (soft delete) a Bingo after confirming his choice |
|      | The user may share a link to the Bingo after adding content to all the cells in the grid (24 cells) |
|      | The user may clone a Bingo and edit it |

### Game view
| Done | Requirement |
| ---- | ----------- |
|      | The system must pick a random value from the list of available values in the Bingo |
|      | The system must save the value after pick it |
|      | The system must not pick a value more than once |
|      | The system must dsiplay the list of selected values |
|      | Each change must be saved after done (for each selected value, mark it as such) |
|      | The user may reset the game, no values selected and shuffle the options |

### Play view
| Done | Requirement |
| ---- | ----------- |
|      | An unregistered user may create a card for a Bingo, but it will be assigned by default to the Guest user |
|      | A card assigned to the Guest user may be edited by anyone with the link |
|      | The user may create a card for a Bingo, and it will be assigned to him |
|      | A card assigned to a specific user must be edited by him and no one else |
|      | The system must print a Bingo card like on the Bingo creator page |
|      | The user may pick a Bingo marker, the options should be a pebble, a grain corn or a button |
|      | If the user change the Bingo marker, the system should update the marked cells and save the new Bingo marker |
|      | If the user click an unmarked cell, the system must mark it and save the change |
|      | If the user click a marked cell, the system must remove the mark and save the change |
|      | Each change must be saved after done |
|      | The user may reset the game, no cells marked |
|      | The user may share a link to his Bingo card |
|      | The user may delete (soft delete) a Bingo card |

### I don't know how to classify this
| Done | Requirement |
| ---- | ----------- |
|      | The index page should have 4 links to explore, create, play and about pages |
|      | The system must implement Symfony Login and Register, including email confirmation |
|      | The website should have a static navbar 4 links to explore, create, play and about pages |
|      | The system must implement an apiKey authentication |
|      | The Gest and ContentCreator users must be created by default |
|      | An unregistered user must logged in as Guest user by default |
|      | All bingo provided by the system must belong to the ContentCreator user |
|      | The user must have an email and a picture, the picture should be the only editable field |
|      | The user profile page should display his Bingo, cards and games and the options to edit them |
