
-- @block
create table ticket_tb(
   ticket_id INT NOT NULL AUTO_INCREMENT,
   show_id INT NOT NULL,
   show_name VARCHAR(40) NOT NULL,
   submission_date DATE,
   PRIMARY KEY ( ticket_id )
);

-- @block
create table show_tb(
   show_id INT NOT NULL AUTO_INCREMENT,
   show_name VARCHAR(40) NULL,
   duration VARCHAR(40) NULL,
   actors VARCHAR(160) NULL,
   release_date VARCHAR(40) NULL,
   submission_date DATE,
   PRIMARY KEY ( show_id )
);

-- @block
DESCRIBE ticket_tb;

-- @block
DESCRIBE show_tb;


-- @block
ALTER TABLE ticket_tb MODIFY show_id INT(11);

-- @block
ALTER TABLE ticket_tb MODIFY show_name VARCHAR(40) NULL;

-- @block
ALTER TABLE ticket_tb MODIFY ticket_id VARCHAR(40) NOT NULL;

-- @block

