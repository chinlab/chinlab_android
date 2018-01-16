<?php
namespace app\common\application;
/**
 * vip描述信息
 * User: user
 * Date: 2017/3/22
 * Time: 14:14
 */
class VipDescConfig
{

    public function getType1()
    {

        return <<<EOT
1、贵宾可指定一家医院和科室，由我方根据病情描述推荐擅长本病种相应专家，并协助挂号。
2、贵宾还将享受诊前指导意见，专业医护人员全程陪同就诊，协助取号、诊疗陪同、检查引导、院内取药、医院和医生情况介绍等服务。
3、如发生伙伴医生先行垫付挂号费的情况，贵宾按照实际发生的金额在就诊时将费用补交给陪诊人员。如预约未成功所缴纳的费用退回。预约成功除院方原因不能提供服务外，其他情况不予退款。
EOT;
    }

    public function getType2()
    {
        return <<<EOT
1、协助安排指定的副主任医师职称的医生就医+专业陪诊。
2、贵宾还将享受诊前指导意见，专业医护人员全程陪同就诊，协助取号、诊疗陪同、检查引导、院内取药、医院和医生情况介绍等服务。
3、如发生伙伴医生先行垫付挂号费的情况，贵宾按照实际发生的金额在就诊时将费用补交给陪诊人员。如预约未成功所缴纳的费用退回。预约成功除院方原因不能提供服务外，其他情况不予退款。
EOT;
    }

    public function getType3()
    {
        return <<<EOT
1、协助安排指定的主任医师职称的医生就医+专业陪诊。
2、贵宾还将享受诊前指导意见，专业医护人员全程陪同就诊，协助取号、诊疗陪同、检查引导、院内取药、医院和医生情况介绍等服务。
3、如发生伙伴医生先行垫付挂号费的情况，贵宾按照实际发生的金额在就诊时将费用补交给陪诊人员。如预约未成功所缴纳的费用退回。预约成功除院方原因不能提供服务外，其他情况不予退款。
EOT;
    }

    public function getType4()
    {
        return <<<EOT
1、指定三甲医院科室正副主任等权威专家的高端面诊协助+专业陪诊。
2、贵宾还将享受诊前指导意见，专业医护人员全程陪同就诊，协助取号、诊疗陪同、检查引导、院内取药、医院和医生情况介绍等服务。
3、如发生伙伴医生先行垫付挂号费的情况，贵宾按照实际发生的金额在就诊时将费用补交给陪诊人员。如预约未成功所缴纳的费用退回。预约成功后除院方原因不能提供服务外，其他情况不予退款。
EOT;
    }
}