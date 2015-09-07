<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
</head>
<body>
<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<div id="main" style="height:400px"></div>
<!-- ECharts单文件引入 -->
<script src="http://echarts.baidu.com/build/dist/echarts.js"></script>
<script type="text/javascript">
    // 路径配置
    require.config({
        paths: {
            echarts: 'http://echarts.baidu.com/build/dist'
        }
    });

    // 使用
    require(
        [
            'echarts',
            'echarts/chart/tree' // 使用柱状图就加载bar模块，按需加载
        ],
        function (ec) {
            // 基于准备好的dom，初始化echarts图表
            var myChart = ec.init(document.getElementById('main'));

            option = {
                title : {
                    text: '树图',
                    subtext: '虚构数据'
                },
                toolbox: {
                    show : true,
                    feature : {
                        mark : {show: true},
                        dataView : {show: true, readOnly: false},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                calculable : false,

                series : [
                    {
                        name:'树图',
                        type:'tree',
                        orient: 'vertical',  // vertical horizontal
                        rootLocation: {x: 'center',y: 50}, // 根节点位置  {x: 100, y: 'center'}
                        nodePadding: 1,
                        itemStyle: {
                            normal: {
                                label: {
                                    show: false,
                                    formatter: "{b}"
                                },
                                lineStyle: {
                                    color: '#48b',
                                    shadowColor: '#000',
                                    shadowBlur: 3,
                                    shadowOffsetX: 3,
                                    shadowOffsetY: 5,
                                    type: 'curve' // 'curve'|'broken'|'solid'|'dotted'|'dashed'

                                }
                            },
                            emphasis: {
                                label: {
                                    show: true
                                }
                            }
                        },

                        data: [
                            {
                                name: '根节点',
                                value: 6,
                                children: [
                                    {
                                        name: '节点1',
                                        value: 4,
                                        children: [
                                            {
                                                name: '叶子节点1',
                                                value: 4
                                            },
                                            {
                                                name: '叶子节点2',
                                                value: 4
                                            },
                                            {
                                                name: '叶子节点3',
                                                value: 2
                                            },
                                            {
                                                name: '叶子节点4',
                                                value: 2
                                            },
                                            {
                                                name: '叶子节点5',
                                                value: 2
                                            },
                                            {
                                                name: '叶子节点6',
                                                value: 4
                                            }
                                        ]
                                    },
                                    {
                                        name: '节点2',
                                        value: 4,
                                        children: [{
                                            name: '叶子节点7',
                                            value: 4
                                        },
                                            {
                                                name: '叶子节点8',
                                                value: 4
                                            }]
                                    },
                                    {
                                        name: '节点3',
                                        value: 1,
                                        children: [
                                            {
                                                name: '叶子节点9',
                                                value: 4
                                            },
                                            {
                                                name: '叶子节点10',
                                                value: 4
                                            },
                                            {
                                                name: '叶子节点11',
                                                value: 2
                                            },
                                            {
                                                name: '叶子节点12',
                                                value: 2
                                            }
                                        ]
                                    }
                                ]
                            }
                        ]
                    }
                ]
            };


            // 为echarts对象加载数据
            myChart.setOption(option);
        }
    );
</script>
</body>