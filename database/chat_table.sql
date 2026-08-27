CREATE TABLE chat_messages(
    id INT AUTO_INCREMENT PRIMARY KEY,
    session_id VARCHAR(64) NOT NULL,
    sender ENUM('visiteur','proprietaire') NOT NULL DEFAULT 'visiteur',
    message TEXT NOT NULL,
    cree_le TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_session (session_id, id)
);
