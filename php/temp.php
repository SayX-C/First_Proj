<?php {
    $minB  = min($b);
    $maxA  = max($a);
    $count = 0;

    if ($minB >= $maxA) {
        // check values inside b[]
        while ($minB >= $maxA) {
            $dividable = true;
            foreach ($b as $value) {
                if ($value % $minB) {
                    $dividable = false;
                    break;
                }
            }
            if ($dividable) {
                break;
            }
            $minB = round($minB / 2);
        }
        if ($dividable) {
            $vars = [];
            $vars[] = $minB;
            for ($i = $minB - 1; $i > 0; $i--) {
                if (!($minB % $i)) {
                    $vars[] = $i;
                }
                if ($i < $maxA) {
                    break;
                }
            }
            foreach ($vars as $var) {
                $dividable = true;
                foreach ($a as $aValue) {
                    if ($var % $aValue) {
                        $dividable = false;
                        break;
                    }
                }
                if ($dividable) {
                    $count++;
                }
            }
        }
    }

    return $count;
}
