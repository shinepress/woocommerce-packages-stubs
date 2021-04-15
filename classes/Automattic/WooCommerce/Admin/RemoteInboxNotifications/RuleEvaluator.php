<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Evaluate the given rules as an AND operation - return false early if a
 * rule evaluates to false.
 */
class RuleEvaluator
{
    /**
     * Constructor.
     *
     * @param GetRuleProcessor $get_rule_processor The GetRuleProcessor to use.
     */
    public function __construct($get_rule_processor = null)
    {
    }
    /**
     * Evaluate the given rules as an AND operation - return false early if a
     * rule evaluates to false.
     *
     * @param array|object $rules        The rule or rules being processed.
     * @param object       $stored_state Stored state.
     *
     * @return bool The result of the operation.
     */
    public function evaluate($rules, $stored_state)
    {
    }
}