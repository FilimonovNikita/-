CREATE TABLE if NOT EXISTS posts (
    userId INT NOT NULL,
    id INT NOT NULL,
    title VARCHAR (255) NOT NULL,
    body TEXT NOT NULL
)

CREATE TABLE IF NOT EXISTS comments (
    postId INT REFERENCES posts (id)NOT NULL,
    id INT NOT NULL,
    name VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    body TEXT NOT NULL
)