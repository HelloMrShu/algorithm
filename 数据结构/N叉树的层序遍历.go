/**
 * Definition for a Node.
 * type Node struct {
 *     Val int
 *     Children []*Node
 * }
 */

func levelOrder(root *Node) [][]int {
    if root == nil {
        return nil
    }

    queue := make([]*Node, 0)
    result := make([][]int, 0)

    queue = append(queue, root)
    for len(queue) != 0 {
        len := len(queue)
        layer := make([]int, 0)
        for i := 0; i < len; i++ {
            node := queue[0]
            queue = queue[1:]

            for _,child := range node.Children {
                queue = append(queue, child)
            }
            layer = append(layer, node.Val)
        }
        result = append(result, layer)
    }
    return result
}