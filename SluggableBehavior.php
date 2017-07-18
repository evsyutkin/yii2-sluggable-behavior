<?php

namespace evsyutkin\behaviors;

class SluggableBehavior extends \yii\behaviors\SluggableBehavior
{
	protected function generateSlug($slugParts)
	{
		return \URLify::filter(implode('-', $slugParts));
	}
}