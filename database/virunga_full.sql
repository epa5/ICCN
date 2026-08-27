CREATE TABLE otp_codes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(150) NOT NULL,
    code VARCHAR(6) NOT NULL,
    expire_at DATETIME NOT NULL,
    utilise TINYINT(1) DEFAULT 0,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
CREATE TABLE chat_messages(
    id INT AUTO_INCREMENT PRIMARY KEY,
    session_id VARCHAR(64) NOT NULL,
    sender ENUM('visiteur','proprietaire') NOT NULL DEFAULT 'visiteur',
    message TEXT NOT NULL,
    cree_le TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_session (session_id, id)
);
