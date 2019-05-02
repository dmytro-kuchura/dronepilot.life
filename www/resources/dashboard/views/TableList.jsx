import React from "react";

import {
    Card,
    CardHeader,
    CardBody,
    CardTitle,
    Table,
    Row,
    Col
} from "reactstrap";

import BlogList from "../components/Blog/BlogList";

class Tables extends React.Component {
    render() {
        return (
            <>
                <div className="content">
                    <Row>
                        <Col md="12">
                            <Card className="card-plain">
                                <CardHeader>
                                    <CardTitle tag="h4">Table on Plain Background</CardTitle>
                                    <p className="category">Here is a subtitle for this table</p>
                                </CardHeader>
                                <CardBody>
                                    <Table className="tablesorter" responsive>
                                        <thead className="text-primary">
                                        <tr>
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>City</th>
                                            <th className="text-center">Salary</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <BlogList/>
                                        </tbody>
                                    </Table>
                                </CardBody>
                            </Card>
                        </Col>
                    </Row>
                </div>
            </>
        );
    }
}

export default Tables;
