<?php

/**
 * This is commercial software, only users who have purchased a valid license
 * and accept to the terms of the License Agreement can install and use this
 * program.
 *
 * Do not edit or add to this file if you wish to upgrade Godomall5 to newer
 * versions in the future.
 *
 * @copyright ⓒ 2016, NHN godo: Corp.
 * @link      http://www.godo.co.kr
 */
namespace Component\Member;

/**
 * Class 회원 관리
 * @package Bundle\Component\Member
 * @author  yjwee
 */
class Member extends \Bundle\Component\Member\Member
{
	public function __construct()
    {
        parent::__construct();
        if (!is_object($this->db)) {
            $this->db = \App::load('DB');
        }
    }


	public function getMemberTotal() {
		$result = $this->db->query_fetch("SELECT groupSno, count(groupSno) as cn from es_member group by groupSno");

		for($i = 0; $i < count($result); $i++) {
			if($result[$i][groupSno] == "2") {
				$data['whspecial'] = number_format($result[$i]['cn']);
			}
			$result['whtotal'] += $result[$i]['cn'];
		}

		$data['whtotal'] = number_format($result['whtotal']);
		return $data;
	}
}