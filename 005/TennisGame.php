<?php
class TennisGame
{
    private $scoreNames = ["Love", "Fifteen", "Thirty", "Forty"];
    private $player1Name;
    private $player2Name;
    private $player1Score;
    private $player2Score;

    public function __construct(string $player1Name, string $player2Name)
    {
        $this->player1Name = $player1Name;
        $this->player2Name = $player2Name;
    }

    public function getScore(): string
    {
        if ($this->isTie()) {
            return $this->getTieScore();
        } elseif ($this->hasAdvantageOrWinner()) {
            return $this->getAdvantageOrWinnerScore();
        } else {
            return $this->getRegularScore();
        }
    }

    public function player1Scores(): void
    {
        $this->player1Score++;
    }

    public function player2Scores(): void
    {
        $this->player2Score++;
    }

    private function isTie(): bool
    {
        return $this->player1Score == $this->player2Score;
    }

    private function hasAdvantageOrWinner(): bool
    {
        return $this->player1Score >= 4 || $this->player2Score >= 4;
    }

    private function getTieScore(): string
    {
        if ($this->player1Score < 3) {
            return $this->scoreNames[$this->player1Score] . '-All';
        } else {
            return 'Deuce';
        }
    }

    private function getAdvantageOrWinnerScore(): string
    {
        $difference = $this->player1Score - $this->player2Score;
        if ($difference == 1) {
            return 'Advantage ' . $this->player1Name;
        } elseif ($difference == -1) {
            return 'Advantage ' . $this->player2Name;
        } elseif ($difference >= 2) {
            return 'Win for ' . $this->player1Name;
        } else {
            return 'Win for ' . $this->player2Name;
        }
    }

    private function getRegularScore(): string
    {
        return $this->scoreNames[$this->player1Score] . '-' . $this->scoreNames[$this->player2Score];
    }
}
$tennisGame = new TennisGame("trung", "hung");
$tennisGame->player1Scores();
$tennisGame->player1Scores();
$tennisGame->player2Scores();
echo $tennisGame->getScore(); 

