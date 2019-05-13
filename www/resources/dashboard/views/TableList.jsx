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
                                    <CardTitle tag="h4">Блог</CardTitle>
                                    <p className="category">Список записей Блога</p>
                                </CardHeader>
                                <CardBody>
                                    <Table className="tablesorter" responsive>
                                        <thead className="text-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>Название</th>
                                            <th>Дата публикации</th>
                                            <th>Статус</th>
                                            <th className="text-center">Действия</th>
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
