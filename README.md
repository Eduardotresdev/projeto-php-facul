# About the project

This project im making in my collage with the subject is Practical Software Development I.

#Creating database
##Make table
`CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));`
  
##Insert datas
`INSERT INTO `usuario` (`usuario`,`senha`) VALUES ('admin','202cb962ac59075b964')`

######Password `123`
