<?php

declare(strict_types=1);

namespace Corcel\WooCommerce\Model;

use Loffel\Model\Taxonomy;

class ProductTag extends Taxonomy
{
    /**
     * The taxonomy slug.
     *
     * @var  string
     */
    protected $taxonomy = 'product_tag';
}
