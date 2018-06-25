<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use App\Player;

class TennisSpec extends ObjectBehavior
{
    protected $jon;
    protected $cyn;

    function let() {
        $this->jon = new Player('Jonathan Z', 0);
        $this->cyn = new Player('Cynthia G', 0);

        $this->beConstructedWith($this->jon, $this->cyn);
    }

    function it_scores_a_scoreless_game() {
        $this->score()->shouldReturn('Love-All');
    }

    function it_scores_a_1_0_game() {
        $this->jon->earnPoints(1);

        $this->score()->shouldReturn('Fifteen-Love');
    }

    function it_scores_a_2_0_game() {
        $this->jon->earnPoints(2);

        $this->score()->shouldReturn('Thirty-Love');
    }

    function it_scores_a_3_0_game() {
        $this->jon->earnPoints(3);

        $this->score()->shouldReturn('Forty-Love');
    }


    function it_scores_a_4_0_game() {
        $this->jon->earnPoints(4);

        $this->score()->shouldReturn('Win for Jonathan Z');
    }

    function it_scores_a_0_4_game() {
        $this->cyn->earnPoints(4);

        $this->score()->shouldReturn('Win for Cynthia G');
    }

    function it_scores_a_4_3_game() {
        $this->jon->earnPoints(4);
        $this->cyn->earnPoints(3);

        $this->score()->shouldReturn('Advantage Jonathan Z');
    }

    function it_scores_a_3_4_game() {
        $this->cyn->earnPoints(4);
        $this->jon->earnPoints(3);

        $this->score()->shouldReturn('Advantage Cynthia G');
    }

    function it_scores_a_4_4_game() {
        $this->jon->earnPoints(4);
        $this->cyn->earnPoints(4);

        $this->score()->shouldReturn('Deuce');
    }

    function it_scores_a_8_9_game() {
        $this->jon->earnPoints(8);
        $this->cyn->earnPoints(9);

        $this->score()->shouldReturn('Advantage Cynthia G');
    }

    function it_scores_a_8_10_game() {
        $this->jon->earnPoints(8);
        $this->cyn->earnPoints(10);

        $this->score()->shouldReturn('Win for Cynthia G');
    }



}
