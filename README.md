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
