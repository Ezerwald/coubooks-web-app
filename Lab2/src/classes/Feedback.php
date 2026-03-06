<?php

class Feedback
{
    private ?int $id;
    private string $text;
    private string $author;
    private ?string $created = '';

    public function __construct(array $data) {
        $this->id = $data['id'] ?? null;
        $this->text = $data['text'];
        $this->author = $data['author'];
        $this->created = $data['created'] ?? date('Y-m-d H:i:s');;
    }

    public function getId(): ?int { return $this->id; }
    public function getText(): string { return $this->text; }
    public function getAuthor(): string { return $this->author; }
    public function getCreated(): string { return $this->created; }

    public static function getAll(PDO $pdo): array {
        $stmt = $pdo->prepare("SELECT * FROM feedback ORDER BY created DESC LIMIT 5");
        $stmt->execute();
        $results = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = new self($row);
        }
        return $results;
    }

    public function save(PDO $pdo): bool {
        $stmt = $pdo->prepare("INSERT INTO feedback (text, author, created) VALUES (?, ?, NOW())");
        $result = $stmt->execute([$this->text, $this->author]);
        if ($result) {
            $this->id = $pdo->lastInsertId();  // Get new ID
        }
        return $result;
    }

}
