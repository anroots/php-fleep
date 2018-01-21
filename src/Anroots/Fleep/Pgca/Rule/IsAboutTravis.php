<?php

namespace Anroots\Fleep\Pgca\Rule;

use Anroots\Pgca\Git\CommitInterface;
use Anroots\Pgca\Rule\AbstractRule;

class IsAboutTravis extends AbstractRule {
protected $name = 'message.isAboutTravis';
    protected function run(CommitInterface $commit)
    {
        if (stristr($commit->getMessage(),'travis')){
            $this->addViolation($commit);
        }
    }
}